<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Conversion;
use App\Option;
use App\Order;
use App\Coupon;
use App\Portfolio;
use App\Newsletter;
use App\PortfolioPhoto;
use App\PromotionEmails;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller

{

    public function index()

    {

        $orders = Order::orderBy('id', 'desc')->paginate(20);

        return view('admin.orders.index', compact('orders'));

    }

    public function create(Request $request, Category $category, Portfolio $portfolio)
    {
        //        Set flowers amount
        $amount = $portfolio->amount;
        $premium = round($amount * config('app.flowers.premium'));
        $platinum = round($amount * config('app.flowers.platinum'));
        //        Set price
        $premium = $premium % 2 == 1 ? $premium : $premium - 1;
        $platinum = $platinum % 2 == 1 ? $platinum : $platinum - 1;
        $amount = json_decode($amount);

        return view('front.orders.create', compact('portfolio', 'amount', 'premium', 'platinum'));

    }

    public function store(Request $request, Category $category, Portfolio $portfolio){

        $uuid = uniqid();
        $order = new Order;
        $order->uuid = $uuid;
        $order->delivery_date = $request->date;
        $order->r_name = $request->r_name . ' ' . $request->r_lname;
        $order->r_address = $request->r_address;
        $order->r_number = $request->r_number;
        $order->message = $request->message;
        $order->order_id = $portfolio->id;
        $size = Size::find($request->size);
        if(!empty($request->size)){
            $order->price = $size->price;
        }else {
            $order->price = $portfolio->price;
        }
        $order->size = $request->size ? $size->size : $portfolio->price3;

        $portfolio->update(['ranking' => ($portfolio->ranking + 0.5)]);

        $order->save();
//            if(!empty($request->email)) {
//                $lastOrder = Order::orderBy('id', 'desc')->get();
//                //Send confirmation email - Will not send if was sent already
//                if($lastOrder->offsetGet(1)->order_id != $order->order_id){
//                    $email = $request->email;
//                    $image = request()->getHttpHost() . '/' . $portfolio->photo->file;
//                    $name = $portfolio->name;
//                    $description = $portfolio->description;
//                    $link = request()->getHttpHost() . '/' . $portfolio->category->name . '/' . ($slug = $portfolio->slug);
//                    $product = ['image' => $image, 'name' => $name, 'description' => $description, 'link' => $link, 'order' => $order];
//
//                    Mail::send('mail_template.confirmation', $product, function($message) use($image, $name, $description, $link, $email, $order)
//                    {
//                        $message->from('noreply@buchetto.ro', 'Buchetto');
//                        $message->to($email)->subject('Confirmare Comanda "' . $name . '" cu Id-ul: ' . ($order->id + 10000));
//                    });
//                }
//            }
        return view('front.thank_you', compact('order', 'portfolio'));

    }

    private function createConversion($conversion){
        $conversion = Conversion::create(['keyword' => $conversion->keyword, 'user_ip' => $conversion->user_ip, 'campaign' => $conversion->campaign, 'conversion' => 1]);
        return $conversion;
    }

    public function delete(Request $request, Order $order)
    {

        $order->delete();

        return redirect()
            ->route('/');

    }

    private function hmacsha1($key, $data)
    {
        $blocksize = 64;
        $hashfunc = 'md5';

        if (strlen($key) > $blocksize) $key = pack('H*', $hashfunc($key));

        $key = str_pad($key, $blocksize, chr(0x00));
        $ipad = str_repeat(chr(0x36) , $blocksize);
        $opad = str_repeat(chr(0x5c) , $blocksize);

        $hmac = pack('H*', $hashfunc(($key ^ $opad) . pack('H*', $hashfunc(($key ^ $ipad) . $data))));
        return bin2hex($hmac);

    }

    private function euplatesc_mac($data, $key)
    {
        $str = NULL;
        foreach ($data as $d)
        {
            if ($d === NULL || strlen($d) == 0) $str .= '-';
            else $str .= strlen($d) . $d;
        }
        $key = pack('H*', $key);
        return $this->hmacsha1($key, $str);
    }

}

