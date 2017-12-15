<?php

namespace App\Http\Controllers;

use App\Show;
use App\Season;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Show::all();
        return view('show.index', compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show = new Show();
        $show->title = $request->title;
        $show->releasedate = $request->releasedate;
        $show->description = $request->description;
        $show->story = $request->story;
        $show->trailer = $request->trailer;
        

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = time() . '-' . $file->getClientOriginalname();
            $file = $file->move(public_path() . '/images/', $name);
            $show->photo = $name;
        }

        $show->save();
        return Redirect::to('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function show(Show $show, User $user)
    {
     return view('show.show', compact('show', 'user'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        return view('show.edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Show $show)
    {
        $show->title = $request->title;
        $show->releasedate = $request->releasedate;
        $show->description = $request->description;
        $show->trailer =  $request->trailer;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = time() . '-' . $file->getClientOriginalname();
            $file = $file->move(public_path() . '/images/', $name);
            $show->photo = $name;
        }


        $show->save();
        return redirect::to('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $show = Show::find($id);
       $show->delete();
       return back();
   }
}
