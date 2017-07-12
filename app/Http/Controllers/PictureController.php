<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('Picture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            'image' => 'image|max:1999'
        ]);
        // Get filename with extension
        $filenameWithExt = $request -> file ('image') -> getClientOriginalName();
        // Get filename by splitting
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get extension
        $extension = $request -> file('image') -> getClientOriginalExtension();

        $fileNameToStore = $filename."_".time().'.'.$extension;

        $path = $request -> file('image') -> storeAs('public/images', $fileNameToStore);


        if ($request -> comment === null) {

            $picture = new Picture;
            $picture -> title = $request ->input('title');
            $picture -> adventure_id = $id;
            $picture -> image = $fileNameToStore;
            $picture -> save();
        }

        else {

            $picture = new Picture;
            $picture -> title = $request ->input('title');
            $picture -> adventure_id = $id;
            $picture -> comment = $request -> comment;
            $picture -> image = $fileNameToStore;
            $picture -> save();

        }

        return redirect("/$id");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $pictures
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $pictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $pictures
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $pictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $pictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $pictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $pictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $pictures)
    {
        //
    }
}
