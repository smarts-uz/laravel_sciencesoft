<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
};

class softController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct( )
    {


    }

    /**
     * Show front home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('front.index');
    }

    
}
