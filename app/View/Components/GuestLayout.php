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
            'submenu' => [
                [
                    'title' => 'Profiles',
                    'route' => 'about',
                    'submenu' => [
                        [
                            'title' => 'GitHub',
                            'route' => 'about',
                        ],
                        [
                            'title' => 'PornHub',
                            'route' => 'about',
                            'requiredRole' => [0,],
                        ],
                    ],
                ],
                [
                    'title' => 'Home',
                    'route' => 'home',
                ],
                [
                    'title' => 'Home',
                    'route' => 'home',
                ],
            ],
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
            'requiredRole' => [0,],
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

