<?php

namespace App\Http\Controllers\Admin;

use App\size;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SizesController extends Controller

{

    public function index(Request $request)

    {
        $portfolio = Portfolio::find($request->portfolio);
        $sizes = $portfolio->sizes;

        return view('admin.sizes.index', compact('sizes', 'portfolio'));

    }



    public function show(size $size, Request $request)

    {

        $size->delete();
        $portfolio = Portfolio::find($size->portfolio_id);
        return view('admin.sizes.index', compact('portfolio'));
    }



    public function create(Request $request){

        $size = new size();
        $portfolio_id = $request->portfolio_id;

        return view('admin.sizes.create', compact('size', 'portfolio_id'));

    }



    public function store(Request $request){
        $size  = new size();

        $size->size = $request->size;
        $size->price = $request->price;
        $size->portfolio_id = $request->portfolio_id;
        $portfolio = Portfolio::find($request->portfolio_id);
        $size->save();
        return view('admin.sizes.index', compact('portfolio'));

    }


    public function set_size(Request $request){

        $portfolio = Portfolio::find($request->portfolio);


        $portfolio->update(['size_id' => $request->size]);

        return redirect()->back();

    }

}
