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
            'title' => 'About',
            'submenu' => [
                [
                    'title' => 'Foundation',
                    'route' => 'foundation',
                ],
                [
                    'title' => 'Staff',
                    'submenu' => [
                        [
                            'title' => 'Board members',
                            'route' => 'boardMembers',
                        ],
                        [
                            'title' => 'Volunteers',
                            'route' => 'volunteers',
                            'requiredRole' => [0,1],
                        ],
                    ],
                ],
            ],
        ],
        [
            'title' => 'Photos',
            'route' => 'photos',
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

