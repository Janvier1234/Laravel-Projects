<?php

// app/Http/Controllers/ContactFormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('your_specified_address@example.com')->send(new ContactFormMail($request));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
