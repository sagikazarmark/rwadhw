<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;

final class HomeController extends Controller
{
    /**
     * Display the dashboard home page.
     *
     * @return \Illuminate\View\View
     */
    final public function home()
    {
        return view('dashboard.home');
    }

    /**
     * Display the dashboard contact messages page.
     *
     * @return \Illuminate\View\View
     */
    final public function contactMessages()
    {
        $contactMessages = DB::table('contact_messages')->orderBy('created_at', 'desc')->get();

        return view('dashboard.contactMessages', ['contactMessages' => $contactMessages]);
    }
}
