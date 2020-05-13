<?php



namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use App\Message;
use App\Option;
use App\Order;
use App\Photo;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class OptionController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $options = Option::all();

        return view('admin.options.index', compact('options'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $option = new Option;

        return view('admin.options.create', compact('option'));

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
        ]);


        if(!empty($request->photo_id)) {
            foreach ($request->photo_id as $key => $file) {
                $name = time().$file->getClientOriginalName();
                $file->move('images', $name);
                $photo = Photo::create(['file' => $name]);
            }
        }

        $option = Option::create(['name' => $request->name, 'price' => $request->price, 'photo_id' => $photo->id]);
        return redirect()->back()->with('message', 'Item was created :)');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\option  $option

     * @return \Illuminate\Http\Response

     */

    public function show(Request $request, option $option)

    {
        $option->delete();

        return redirect()->back()->with('message', 'The option has been deleted.');

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\option  $option

     * @return \Illuminate\Http\Response

     */

    public function edit(option $option, Request $request)
    {
        $option = option::where('slug', $request->slug)->first();

        $tags = '';
        $flowers = Flower::pluck('name', 'id');
        foreach($option->tags as $tag){
            if(empty($tags)){
                $tags = $tag->name;
            } else {
                $tags = $tags . ' ' . $tag->name;
            }

        }

        $categories = Category::pluck('name', 'slug');
        return view('admin.options.edit', compact('option', 'categories', 'tags', 'flowers'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\option  $option

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request)
    {
        $option = option::whereSlug($request->slug)->first();
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'standard' => 'required',
            'category_id' => 'required',
            'discount' => 'nullable|int',
            'only_standard' => 'nullable|int',
        ]);

        if(!empty($request->photo_id)){
            foreach($request->photo_id as $key => $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                Photo::create(['file'=>$name, 'option_id' => $option->id]);
            }
        }


        $option->name = $request->name;
        $option->description = $request->description;
        $option->keywords = $request->keywords;
        $option->price = $request->standard;
        $option->price2 = $request->premium;
        $option->price3 = $request->platinum;
        $option->category_id = $request->category_id;
        $option->amount = $request->amount;
        $option->discount = $request->discount;
        $option->only_standard = $request->only_standard;
        $option->ranking = $request->ranking;
        $option->available = $request->available;
        $option->ppi = $request->ppi;
        $option->min = $request->min;
        $option->net = $request->net;
        $option->lacrima = $request->lacrima;
        $option->flower_type = $request->flower_type;
        $option->expenses = $request->expenses;
        $option->update();

        if(!empty($request->tags)){
            $tags = explode(' ', $request->tags);
            foreach($option->tags as $tag){
                $tag->delete();
            }

            //Get all tags
            $tags = Tag::whereIn('name', $tags)->get();
            //Create many to many
            foreach($tags as $tag){
                optionTag::create(['tag_id' => $tag->id, 'option_id' => $option->id, 'name' => $tag->name]);
            }
        }

        return redirect()->back()->with('message', 'Item was updated :)');
    }



}

