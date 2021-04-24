<?php

namespace App\Http\Controllers;

final class HomeController extends Controller {
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    final public function home()
    {
        return view('home');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    final public function about()
    {
        return view('about');
    }
}
