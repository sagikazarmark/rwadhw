<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Models\Volunteer;

final class HomeController extends Controller
{
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
     * Display the foundation page.
     *
     * @return \Illuminate\View\View
     */
    final public function foundation()
    {
        return view('foundation');
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

    /**
     * Display the volunteers page.
     *
     * @return \Illuminate\View\View
     */
    final public function volunteers()
    {
        $volunteers = Volunteer::get();

        return view('volunteers', ['volunteers' => $volunteers]);
    }
}
