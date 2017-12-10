<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::all();
        return view('movie.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->releasedate = $request->releasedate;
        $movie->description = $request->description;
        $movie->trailer = $request->trailer;
        

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = time() . '-' . $file->getClientOriginalname();
            $file = $file->move(public_path() . '/images/', $name);
            $movie->photo = $name;
        }

        $movie->save();
        return Redirect::to('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
     $movie->title = $request->title;
     $movie->releasedate = $request->releasedate;
     $movie->description = $request->description;
     $movie->trailer =  $request->trailer;

     if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $name = time() . '-' . $file->getClientOriginalname();
        $file = $file->move(public_path() . '/images/', $name);
        $movie->photo = $name;
    }
    
    
    $movie->save();
    return redirect::to('movie');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
