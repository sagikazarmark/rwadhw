<?php

namespace App\Http\Controllers\Dashboard;

abstract class Controller extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
}
