<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;

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

    /**
     * Display the board members page.
     *
     * @return \Illuminate\View\View
     */
    final public function boardMembers()
    {
        $boardMembers = BoardMember::get();

        return view('boardMembers', ['boardMembers' => $boardMembers]);
    }
}
