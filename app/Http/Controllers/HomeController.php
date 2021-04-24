<?php

namespace App\Http\Controllers;

final class HomeController extends Controller {
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }
}
