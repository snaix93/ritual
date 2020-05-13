<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller

{

    public function index()

    {

        $tags = Tag::paginate(10);

        return view('admin.tags.index', compact('tags'));

    }



    public function show(Tag $Tag, Request $request)

    {

        $Tag->delete();

        return redirect()->back();

    }



    public function create(){

        $tag = new Tag();

        return view('admin.tags.create', compact('tag'));

    }



    public function store(Request $request){

        $Tag  = new Tag();

        $Tag->name = $request->name;
        $Tag->description = $request->description;
        $Tag->header = $request->header;

        $Tag->save();

        return redirect()->route('admin.tags.index');

    }


    public function update(Request $request, Tag $tag){


        $tag->update(['name' => $request->name, 'description' => $request->description, 'header' => $request->header ]);


        return redirect()->route('admin.tags.index');

    }

}
