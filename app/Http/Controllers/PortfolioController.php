<?php



namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use App\Message;
use App\Order;
use App\Photo;
use App\Portfolio;
use App\PortfolioTag;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class PortfolioController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $portfolios = Portfolio::all();

        return view('admin.portfolio.index', compact('portfolios'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $portfolio = new Portfolio;
        $categories = Category::pluck('name', 'slug');

        return view('admin.portfolio.create', compact('portfolio','categories'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
        ]);


//        $portfolio = new Portfolio;
        $data = $request->all();
        $data['slug'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($request->name));
        unset($data['photo_id']);

//        dd($portfolio);
//        $portfolio->name = $request->name;
//
//        $portfolio->description = $request->description;
//        $portfolio->keywords = $request->keywords;
//        $portfolio->price = $request->standard;
//        $portfolio->ranking = $request->ranking;
//        $portfolio->price2 = $request->premium;
//        $portfolio->price3 = $request->platinum;
//        $portfolio->category_id = $request->category_id;
//        $portfolio->amount = $request->amount;
//        $portfolio->discount = $request->discount;
//        $portfolio->available = $request->available;
//        $portfolio->only_standard = $request->only_standard;
//        $portfolio->ppi = $request->ppi;
//        $portfolio->net = $request->net;
//        $portfolio->min = $request->min;
//        $portfolio->lacrima = $request->lacrima;
//        $portfolio->flower_type = $request->flower_type;
//        $portfolio->expenses = $request->expenses;
//        $portfolio->price = ($request->ppi * $request->amount);
//        $portfolio->save();

        $data = $request->all();
        $data['slug'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($request->name));
        unset($data['photo_id']);


        $portfolio = Portfolio::create($data);
        if(!empty($request->photo_id)){
            foreach($request->photo_id as $key => $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $photo = Photo::create(['file'=>$name, 'portfolio_id' => $portfolio->id]);
            }
            $portfolio->update(['photo_id' => $photo->id]);
        }

        if(!empty($request->tags)){
            $tags = explode(' ', $request->tags);
            $tags = Tag::whereIn('name', $tags)->get();
            foreach($tags as $tag){
                PortfolioTag::create(['tag_id' => $tag->id, 'portfolio_id' => $portfolio->id, 'name' => $tag->name]);
            }
        }

        return redirect()->back()->with('message', 'Item was created :)');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Portfolio  $portfolio

     * @return \Illuminate\Http\Response

     */

    public function show(Request $request, Portfolio $portfolio)

    {

        $portfolio = Portfolio::whereSlug($request->slug)->first();

        foreach($portfolio->tags as $tag){
            $tag->delete();
        }


        foreach ($portfolio->photos as $photo){
            $image_path = $photo->file;  // Value is not URL but directory file path
            if (file_exists('.'.$image_path)) {
                unlink('.'.$image_path);
            }
            $photo->delete();
        }
        $portfolio->delete();

        return redirect()->back()->with('message', 'The portfolio has been deleted.');

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Portfolio  $portfolio

     * @return \Illuminate\Http\Response

     */

    public function edit(Portfolio $portfolio, Request $request)
    {
        $portfolio = Portfolio::where('slug', $request->slug)->first();

        foreach($portfolio->tags as $tag) {
            if (empty($tags)) {
                $tags = $tag->name;
            } else {
                $tags = $tags . ' ' . $tag->name;
            }
        }

        $categories = Category::pluck('name', 'slug');
        return view('admin.portfolio.edit', compact('portfolio', 'categories', 'tags'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Portfolio  $portfolio

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request)
    {
        $portfolio = Portfolio::whereSlug($request->slug)->first();
        $data = $request->all();
        unset($data['photo_id']);

        $portfolio->update($data);

        if(!empty($request->photo_id)){
            foreach($request->photo_id as $key => $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $photo = Photo::create(['file'=>$name, 'portfolio_id' => $portfolio->id]);
            }
            $portfolio->update(['photo_id' => $photo->id]);
        }

        $tags = explode(' ', $request->tags);
        foreach($portfolio->tags as $tag){
            $tag->delete();
        }

        //Get all tags
        $tags = Tag::whereIn('name', $tags)->get();
        //Create many to many
        foreach($tags as $tag){
            PortfolioTag::create(['tag_id' => $tag->id, 'portfolio_id' => $portfolio->id, 'name' => $tag->name]);
        }

//
//        $portfolio = Portfolio::whereSlug($request->slug)->first();
//        $this->validate($request, [
//            'name' => 'required',
//            'description' => 'required',
//            'category_id' => 'required',
//            'discount' => 'nullable|int',
//            'only_standard' => 'nullable|int',
//        ]);
//
//        if(!empty($request->photo_id)){
//            foreach($request->photo_id as $key => $file){
//                $name = time() . $file->getClientOriginalName();
//                $file->move('images', $name);
//                Photo::create(['file'=>$name, 'portfolio_id' => $portfolio->id]);
//            }
//        }
//
//
//        $portfolio->name = $request->name;
//        $portfolio->description = $request->description;
//        $portfolio->keywords = $request->keywords;
//        $portfolio->price = $request->standard;
//        $portfolio->price2 = $request->premium;
//        $portfolio->price3 = $request->platinum;
//        $portfolio->category_id = $request->category_id;
//        $portfolio->amount = $request->amount;
//        $portfolio->discount = $request->discount;
//        $portfolio->only_standard = $request->only_standard;
//        $portfolio->ranking = $request->ranking;
//        $portfolio->available = $request->available;
//        $portfolio->ppi = $request->ppi;
//        $portfolio->min = $request->min;
//        $portfolio->net = $request->net;
//        $portfolio->lacrima = $request->lacrima;
//        $portfolio->flower_type = $request->flower_type;
//        $portfolio->expenses = $request->expenses;
//        $portfolio->price = ($request->ppi * $request->amount);
//        $portfolio->update();
//

        return redirect()->route('admin.portfolios.index');
    }

    public function modifyPrices(Request $request){
        $title = '';
        $description = '';
        if(!empty($request->category_id)){
            $portfolios = Portfolio::where('ppi', '>', $request->min)->where('ppi', '<', $request->max)->whereCategoryId($request->category_id)->orderBy('ppi', 'asc')->paginate(100);
        } else{
            $portfolios = Portfolio::where('ppi', '>', $request->min)->where('ppi', '<', $request->max)->orderBy('ppi', 'asc')->paginate(100);

        }

        return view('front.product_list', compact('portfolios', 'title', 'description'));
    }


}

