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

        Tag::create($request->all());

        return redirect()->route('admin.tags.index');

    }


    public function update(Request $request, Tag $tag){


        $tag->update($request->all());


        return redirect()->route('admin.tags.index');

    }

}
