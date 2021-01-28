<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SoftController extends Controller
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
        return view('front.pages.contact-us');
    }

     /**
     * Show front careers-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careers() {
        return view('front.pages.about.careers');
    }

    // /**
    //  * Show front Locations-page.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function careers() {
    //     return view('front.pages.about.locations');
    // }


     /**
     * Show front softwaredevelopment-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function softwaredevelopment() {
        return view('front.pages.services.software-development');
    }
}