<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $menu = [
        [
            'title' => 'Dashboard',
            'route' => 'dashboard',
        ],
        [
            'title' => 'Contact messages',
            'route' => 'dashboard.contactMessages',
        ],
        [
            'title' => 'Board members',
            'route' => 'dashboard.boardMembers',
        ],
        [
            'title' => 'Volunteers',
            'route' => 'dashboard.volunteers',
        ],
    ];

    public $dropdown_menu = [
        [
            'title' => 'Home',
            'route' => 'home',
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
        return view('layouts.app');
    }
}
