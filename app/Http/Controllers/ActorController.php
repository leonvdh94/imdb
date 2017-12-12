<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $actor = Actor::all();


     return view('actor.index', compact('actor'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('actor.create');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->firstname = $request->firstname;
        $actor->lastname = $request->lastname;
        $actor->gender = $request->gender;
        $actor->birthdate = $request->birthdate;
        $actor->bio = $request->bio;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = time() . '-' . $file->getClientOriginalname();
            $file = $file->move(public_path() . '/images/', $name);
            $actor->photo = $name;
        }

        $actor->save();
        return Redirect::to('actor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
     return view('actor.show', compact('actor'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('actor.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
     $actor->firstname = $request->firstname;
     $actor->lastname = $request->lastname;
     $actor->gender = $request->gender;
     $actor->birthdate = $request->birthdate;
     $actor->bio = $request->bio;

     if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $name = time() . '-' . $file->getClientOriginalname();
        $file = $file->move(public_path() . '/images/', $name);
        $actor->photo = $name;
    }
    $actor->save();
    return redirect::to('actor');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return back();
    }
}
