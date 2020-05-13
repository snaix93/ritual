<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PhotosController extends Controller

{

    public function index(Request $request)

    {
        $portfolio = Portfolio::find($request->portfolio);
        $photos = $portfolio->photos;

        return view('admin.photos.index', compact('photos', 'portfolio'));

    }



    public function show(photo $photo, Request $request)

    {

        if (file_exists('.'.$photo->file)) {
            unlink('.'.$photo->file);
        }

        $photo->delete();

        return redirect()->back();

    }



    public function create(){

        $photo = new Photo();

        return view('admin.photos.create', compact('photo'));

    }



    public function store(Request $request){

        $photo  = new Photo();

        $photo->name = $request->name;
        $photo->description = $request->description;
        $photo->header = $request->header;

        $photo->save();

        return redirect()->route('admin.photos.index');

    }


    public function set_photo(Request $request,Photo $photo, Portfolio $portfolio){

        $portfolio = Portfolio::find($request->portfolio);

        $portfolio->update(['photo_id' => $request->photo]);

        return redirect()->back();

    }

}
