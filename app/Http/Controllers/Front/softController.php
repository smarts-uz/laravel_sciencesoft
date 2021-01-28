<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class softController extends Controller
{
    /**
     * Show front home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('front.pages.index');
    }

        /**
     * Show front contact-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {

        return view('front.pages.contact');
    }


}