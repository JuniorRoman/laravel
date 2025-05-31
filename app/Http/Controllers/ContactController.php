<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('sweetfamily.tp@gmail.com')->send(new ContactMessage($data));

        return redirect()->route('contacts')->with('success', 'Dziękujemy! Twoja wiadomość została wysłana.');
    }
}

