<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $menu = [
        [
            'title' => 'Home',
            'route' => 'home',
        ],
        [
            'title' => 'About Mrak',
            'route' => 'about',
        ],
        [
            'title' => 'Contact',
            'route' => 'contact',
        ],
    ];

    public $right_menu = [
        [
            'title' => 'Log in',
            'route' => 'login',
        ],
        [
            'title' => 'Register',
            'route' => 'register',
        ],
    ];

    public $dropdown_menu = [
        [
            'title' => 'Dashboard',
            'route' => 'dashboard',
            'isAdminRequired' => true,
        ],
        [
            'title' => 'Log out',
            'route' => 'logout',
        ],
    ];

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}

