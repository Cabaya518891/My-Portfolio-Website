<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Sends the email to your personal inbox
        Mail::to('geraldinecabaya19@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
