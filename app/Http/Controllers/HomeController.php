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
}
