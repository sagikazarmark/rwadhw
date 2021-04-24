<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

final class ContactController extends Controller {
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    final public function create()
    {
        return view('contact');
    }

    /**
     * Handle an incoming contact request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = ContactMessage::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        Mail::to(config('custom.admin_email'))->send(new ContactMessageMail($message));

        session()->flash('status', 'Message successfully sent to the administrators!');

        return redirect()->route('contact');
    }
}
