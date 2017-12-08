<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Movie;
use App\Actor;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        return view('dashboard');
    }

    
}
