<?php
namespace App\Http\Controllers;

use App\Conversion;
use App\Option;
use App\Order;
use App\Tag;
use App\Coupon;
use App\Category;
use App\Portfolio;
use App\Newsletter;
use App\PortfolioTag;
use App\PromotionEmails;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller{

    public function landing(Request $request){
        $categories = $this->navCategories();
        $tags_categories = $this->tags();
        if(!empty($request->language)){
            Session::put('locale',$request->language);
            App::setLocale($request->language);
        }
//        $carousel = Portfolio::whereAvailable(1)->orderBy('created_at', 'desc')->take(27)->get();
        $newProducts = Portfolio::whereAvailable(1)->whereNotNull('rotating_image')->orderBy('created_at', 'desc')->take(27)->get();
        return view('front.landing', compact('newProducts', 'carousel', 'categories', 'tags_categories'));
    }

    public function navCategories(){

        $categories = Category::whereNull('main_category')->get();
        return $categories;
    }

    public function tags(){
        $tags_categories = Tag::all();
        return $tags_categories;
    }
    public function index(Category $category, Request $request) {

        $range = [0, 10000];
        $orderBy = $request->sorting ? $request->sorting : 'ranking';
        $asc = $request->sorting == 'ranking' ? 'asc' : 'desc';

        $categories = $this->navCategories();
        $tags_categories = $this->tags();
        if(!empty($request->price_min)){
            $range = [intval($request->price_min), intval($request->price_max)];
        }

        if(!empty($category)){
            $lang = session('locale') == 'en';
            $description = $lang ? $category->description : $category->description_ru;
            $title = $lang ? $category->display_name : $category->display_name_ru;
        }

        if(!empty($request->search)){
            $search = $request->search;
            $tag = Tag::whereName($search)->first();
            if(!empty($tag)){
                $tags = PortfolioTag::whereTagId($tag->id)->pluck('portfolio_id');
                $portfolios = Portfolio::whereAvailable(1)->whereIn('id', $tags)->whereBetween('price', $range)->orderBy($orderBy, $asc)->paginate(24);
            } else {
                $portfolios = Portfolio::where('name', 'like', '%' . $search . '%')->whereAvailable(1)->paginate(24);
            }
        } else {
            $portfolios = Portfolio::whereIn('category_id', $category->subCategories()->pluck('name'))->orWhere('category_id', $category->slug)->orderBy($orderBy, $asc)->paginate(24);
        }
        return view('front.product_list', compact('portfolios', 'type', 'search', 'title', 'description','categories', 'tags_categories', 'category'));
    }

    public function allProducts(Request $request){
        if(!empty($request->language)){
            Session::put('locale',$request->language);
            App::setLocale($request->language);
            return redirect($request->link);
        }

        $categories = $this->navCategories();
        $tags_categories = $this->tags();
        $title  = config('custom.title');
        $description = config('custom.description');

        if(!empty($request->search)){
            $range = [0, 10000];
            if(!empty($request->price_min)){
                $range = [intval($request->price_min), intval($request->price_max)];
            }
            $search = $request->search;
            $tag = Tag::whereName($search)->first();
            if(!empty($tag)){
                $tags = PortfolioTag::whereTagId($tag->id)->pluck('portfolio_id');
                $portfolios = Portfolio::whereAvailable(1)->whereIn('id', $tags)->whereBetween('price', $range)->orderBy('ranking', 'desc')->paginate(48);
            } else {
                $portfolios = Portfolio::where('name', 'like', '%' . $search . '%')->whereAvailable(1)->orWhere('id', $search)->paginate(48);
            }
            return view('front.product_list', compact('portfolios', 'search', 'title', 'description','categories', 'tags_categories'));
        }

        if(!empty($request->price_min)){
            $range = [intval($request->price_min), intval($request->price_max)];
            $portfolios = Portfolio::whereAvailable(1)->whereBetween('price', $range)->orderBy('ranking', 'desc')->paginate(48);
        }else{
            $portfolios = Portfolio::whereAvailable(1)->whereNotNull('rotating_image')->orderBy('ranking', 'desc')->paginate(48);
        }
        return view('front.product_list', compact('portfolios', 'title', 'description','categories','tags_categories'));
    }
    public function discounts(){
        $cat = ['funerara'];
        $portfolios = Portfolio::whereAvailable(1)->whereNotIn('category_id', $cat)->where('discount', '>', 0)->orderBy('discount', 'desc')->paginate(24);
        return view('front.product_list', compact('portfolios', 'title', 'description'));
    }

    public function byPrice(Request $request){
        $order = $request->order;

        $product = Portfolio::find($request->product);
        if($order == 'asc'){
            $title  = ucwords($product->category_id) . ' ordonate dupa pret Crescator';
            $description = 'Alege din gama noastra de produse ceea ce e pe placul tau. Iar pentru a te ajuta, am structurat produsele noastre dupa pret in asa mod, ca să poți găsi  produsul potrivit cat mai repede. Produsele sunt selectate doar dintr-o categorie. Pentru a vedea mai multe produse, va rugam sa schimbați categoria. ';
            $portfolios = Portfolio::whereAvailable(1)->where('category_id', $product->category_id)->groupBy('id')->orderByRaw('(SUM(min) * SUM(ppi)) ASC')->paginate(1000);
        } elseif($order == 'desc'){
            $title  = ucwords($product->category_id) . ' ordonate dupa pret Descrescator';
            $description = 'Alege din gama noastra de produse ceea ce e pe placul tau. Iar pentru a te ajuta, am structurat produsele noastre dupa pret in asa mod, ca să poți găsi produsul potrivit cat mai repede. Produsele sunt selectate doar dintr-o categorie. Pentru a vedea mai multe produse, va rugam sa schimbați categoria. ';
            $portfolios = Portfolio::whereAvailable(1)->where('category_id', $product->category_id)->groupBy('id')->orderByRaw('(SUM(min) * SUM(ppi)) DESC')->paginate(1000);
        } elseif($order == 'date'){
            $title  = ucwords($product->category_id) . ' ordonate dupa pret Descrescator';
            $description = 'Alege din gama noastra de produse ceea ce e pe placul tau. Iar pentru a te ajuta, am structurat produsele noastre dupa pret in asa mod, ca să poți găsi produsul potrivit cat mai repede. Produsele sunt selectate doar dintr-o categorie. Pentru a vedea mai multe produse, va rugam sa schimbați categoria. ';
            $portfolios = Portfolio::whereAvailable(1)->where('category_id', $product->category_id)->orderBy('created_at', 'desc')->paginate(1000);
        } else{
            $title  = ucwords($product->category_id) . ' ordonate dupa Data Crearii ';
            $description = 'Alege din gama noastra de produse ceea ce e pe placul tau. Iar pentru a te ajuta, am structurat produsele după data crearii a acestora pentru de a beneficia de cele mai recente oferte. Produsele sunt selectate doar dintr-o categorie. Pentru a vedea mai multe produse, va rugam sa schimbați categoria. ';
            $portfolios = Portfolio::whereAvailable(1)->where('category_id', $product->category_id)->orderBy('ranking', 'desc')->paginate(1000);
        }
        return view('front.product_list', compact('portfolios', 'title', 'description', 'order'));
    }

    public function categories($tagName, Request $request){
        $tag = Tag::whereName($tagName)->first();
        $categories = Category::whereNull('main_category')->get();
        $tags_categories = Tag::all();
        if(!empty($request->keyword)){
            $this->saveConversion($request->keyword, $request->campaign);
        }
        $range = [0, 10000];
        if(!empty($request->price_min)){
            $range = [intval($request->price_min), intval($request->price_max)];
        }

        if(!empty($tag)){
            $description = ($ru = session('locale') == 'ru') ? 'description_ru' : 'description';
            $title = $ru ? 'header_ru' : 'header';
            $description = $tag->$description;
            $title = $tag->$title;
            $order = $tag->id % 2 == 1 ? 'ranking' : 'created_at';
            $tags = PortfolioTag::whereTagId($tag->id)->pluck('portfolio_id');
            $portfolios = Portfolio::whereAvailable(1)->whereIn('id', $tags)->orderBy($order, 'desc')->paginate(24);
        } else {
            $portfolios = Portfolio::whereId(215)->paginate();
        }

//        dd($portfolios);
        return view('front.product_list', compact('portfolios', 'type', 'tagName', 'tag', 'title', 'description', 'categories', 'tags_categories'));
    }

    public function pagenotfound() {
        return view('errors.pagenotfound');

    }

    public function applyCoupon(Request $request){
        $coupon = Coupon::whereName($request->coupon)->first();
        $total = intval($request->total);
        if(strtolower($coupon->name)== 'mf3585'){
            $coupon_value = $total > 299 ? 50 : 25;
        } else{
            $coupon_value = $coupon->value;
        }
        if(!empty($coupon->name)){
            return json_encode(['status' => 'success', 'value' => $coupon_value, 'name' => $coupon->name]);
        } else {
            return json_encode(['status' => 'error', 'value' => $coupon_value, 'name' => $coupon->name]);
        }
    }

    public function sendToEmail(Portfolio $portfolio, Request $request){
        $portfolio = Portfolio::find($request->product);

        $email = $request->email;
        $image = request()->getHttpHost() . '/' . $portfolio->photo->file;
        $name = $portfolio->name;
        $description = $portfolio->description;
        $link = request()->getHttpHost() . '/' . $portfolio->category->name . '/' . ($slug = $portfolio->slug);
        $product = ['image' => $image, 'name' => $name, 'description' => $description, 'link' => $link];
        $newsletter = Newsletter::create(['email' => $email, 'subscribed' => $request->newsletter ? 1 : 0, 'location' => 'save_product', 'product_id' => $portfolio->id]);

//        return(view('mail_template.save_product', compact('image', 'name', 'description', 'link')));
        Mail::send('mail_template.save_product', $product, function($message) use($image, $name, $description, $link, $email)
        {
            $message->from('noreply@buchetto.ro', 'Buchetto');
            $message->to($email)->subject($name);

        });

        return redirect()->back()->withMessage('Produsul a fost transmis catre emailul dumneavoastra. Verificați mapa spam/promotions dacă nu puteți găsi mesajul. Multumim!');
    }

    public function displayItem(Request $request, Category $category, Portfolio $portfolio) {

        $categories = Category::whereNull('main_category')->get();
        $tags_categories = Tag::all();
        $amount = $portfolio->amount;
        $min = $portfolio->min;
        $amount = json_decode($amount);
        $multiply = $portfolio->category_id == 'funerara' ? 20 : 6;
        $net_flower_price = empty($portfolio->flower->value) ? '' : json_encode($portfolio->flower->value);

        if(!empty($request->keyword)){
            $this->saveConversion($request->keyword, $request->campaign);
        } else {
            $portfolio->update(['ranking' => ($portfolio->ranking + 0.1)]);
        }
        $today = strtotime("now");
        $wks = strtotime("+60 day", $today);
        $today = date('Y-m-d', $today);
        $wks = date('Y-m-d', $wks);
        $period = CarbonPeriod::create($today, $wks);

        // Iterate over the period
        $dates = [];
        $excluded = [];
        foreach ($period as $key => $date) {
            $date = $date->format('Y-m-d');
            $dates[] = in_array($date, $excluded) ? 'Inchis' : $date;
            if($key > 60){
                break;
            }
        }

        $similarProducts = Portfolio::whereAvailable(1)->whereCategory_id($portfolio->category_id)->where('id', '!=', $portfolio->id)->orderBy(DB::raw('RAND()'))->take(16)->get();
        return view('front.product', compact('portfolio', 'amount', 'similarProducts', 'min', 'net_flower_price', 'multiply', 'dates', 'categories', 'tags_categories'));
    }

    public function checkout(Portfolio $portfolio, Request $request){
        $selectedData = $request->date;
        if(empty($portfolio)) return redirect('/all-products');
        $flow_amount = $request->flow_amount ? $request->flow_amount : $portfolio->amount ;

        if(!empty($request->size)){
            $size = $portfolio->sizes()->wherePrice($request->size)->first();
            $total = $size->price;
        } else {
            $total = $portfolio->price;
        }

        $today = strtotime("now");
        $wks = strtotime("+60 day", $today);
        $today = date('Y-m-d', $today);
        $wks = date('Y-m-d', $wks);
        $period = CarbonPeriod::create($today, $wks);

        // Iterate over the period
        $dates = [];
        $excluded = ['2020-02-01', '2020-02-02', '2020-02-03', '2020-02-04'];
        foreach ($period as $key => $date) {
            $date = $date->format('Y-m-d');
            $dates[] = in_array($date, $excluded) ? 'Inchis' : $date;
            if($key > 60){
                break;
            }
        }

        return view('front.checkout', compact('total', 'portfolio', 'quant', 'flow_amount', 'dates', 'options', 'optionsArray', 'selectedData', 'size'));
    }
    public function saveEmail(Request $request)
    {
        if(!empty($request->email)){
            $email = PromotionEmails::create(['email' => $request->email, 'message' => $request->message, 'value' => 1]);
            $email->save();
        }
        $saved = false;
        if(!empty($email)){
            $saved = true;
            $cookie = Cookie::queue('saved', 'saved', 20);
        }
        $message = true;
        return view('front.categories.contact', compact('message'));
        return redirect()->back()->with(['message' => $message])->withErrors(['saved', 'saved']);
    }

    public function sendEmails(Request $request)
    {
       $users = Order::where('b_email', '!=', null)->get();
       foreach($users as $user)
       {
           $details = [];
           $details['email'] = $user->b_email;
           $details['name'] = $user->b_name;
           $details['id'] = $user->id;

           Mail::send('mail_template.coupon',$details, function($message) use($details)
           {
               $message->from('noreply@buchetto.ro', 'Buchetto');
               $message->to('statniialex@gmail.com')->subject('Ati comandat mai devreme produsul cu ID-ul: ' . $details['id'] . '. Multumim de incredere!');

           });
           dd($user->b_name);
       }
       dd($emails);
    }

    public function sendCoupon(Request $request)
    {
        $order = Order::find($request->order);

        if(!empty($order->b_email)){
            $details['id'] = $order->id;
            $details['email'] = $order->b_email;
            Mail::send('mail_template.coupon', $details, function($message) use($details)
            {
                $message->from('noreply@buchetto.ro', 'Buchetto');
                $message->to($details['email'])->subject('Ati comandat mai devreme produsul cu ID-ul: ' . $details['id'] . '. Multumim de incredere!');

        });
            dd('sent');
        } else {
            dd('not sent');
        }

    }

    private function saveConversion($keyword, $campaign){
        $session_id = session()->getId();
        $conversion = Conversion::whereSessionId($session_id)->whereKeyword($keyword)->first();
        if(empty($conversion)){
            $user_ip = empty($_SERVER['REMOTE_ADDR']) ? '' : $_SERVER['REMOTE_ADDR'];
            Conversion::create(['keyword' => $keyword, 'name' => 'keyword', 'session_id' => $session_id, 'user_ip' => $user_ip, 'conversion' => 0, 'campaign' => $campaign, 'link' => url()->current()]);
            session()->put('keyword', $keyword);
        }
    }

    public function whatsapp(Request $request){

        $this->conversion('whatsApp', $request->product_id);
        if(!empty($request->product_id)){
            return redirect('https://api.whatsapp.com/send?phone=40726688087&text=Bun%C4%83!%20M%C4%83%20intereseaz%C4%83%20produsul%20cu%20idul%20' . $request->product_id . ',%20ma%20pute%C8%9Bi%20ajuta?');
        } else{
            return redirect('https://api.whatsapp.com/send?phone=40726688087&text=Bun%C4%83!%20M%C4%83%20intereseaz%C4%83%20un%20produs,%20ma%20pute%C8%9Bi%20ajuta?');
        }
    }

    public function sms(Request $request){
        $this->conversion('sms', $request->product_id);
        if(empty($request->product_id)){
            return redirect('https://sms:+40726688087?body=Buna! Ma intereseaza produsul cu idul ' . $request->product_id . ', ma puteti ajuta?');
        } else{
            return redirect('https://sms:+40726688087?body=Buna! Ma intereseaza un produs, ma puteti ajuta?');
        }
    }

    public function phoneCall(){
        $this->conversion('phone_call');
    }

    private function conversion($conversionType, $portfolio = null){
        $session_id = session()->getId();
        $keyword = session()->get('keyword');
        $conversion = Conversion::whereSessionId($session_id)->whereKeyword($keyword)->first();
        $user_ip = empty($_SERVER['REMOTE_ADDR']) ? '' : $_SERVER['REMOTE_ADDR'];
        if(empty($conversion) && $keyword){
            Conversion::create(['keyword' => $keyword, 'name' => 'keyword', 'session_id' => $session_id, 'user_ip' => $user_ip, 'conversion' => $conversionType, 'product_id' => $portfolio]);
        } else {
            $conversion = Conversion::whereUserIp($user_ip)->orderBy('id', 'desc')->first();
            if(!empty($conversion) && $conversion->conversion == 0){
                $conversion->update(['conversion' => $conversionType]);
            }
        }
    }

}

