<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Photo;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourExperience = Experience::all();
        return view('admin.Experience.index', compact('ourExperience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experience = new Experience;
        return view('admin.Experience.create', compact('experience'));
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
            'description' => 'required',
        ]);

        $Experience = new Experience;
        if($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $Experience->photo_id = $photo->id;
        }
        $Experience->link = $request->link;
        $Experience->name = $request->name;
        $Experience->description = $request->description;
        $Experience->save();
        return redirect()->back()->with('message', 'Item was created :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $Experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $Experience)
    {
        $Experience->delete();
        return redirect()->back()->with('message', 'The Experience has been deleted.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $Experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('admin.Experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $Experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $Experience)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        if($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $Experience->photo_id = $photo->id;
        }
        $Experience->link = $request->link;
        $Experience->name = $request->name;
        $Experience->description = $request->description;
        $Experience->update();
        return redirect()->back()->with('message', 'Item was updated :)');
    }
}
