<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisitorContact;
use Illuminate\support\Facades\Mail;
use Illuminate\support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function showContact()
    {
        return view('pages.contact');
    }
    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request ->name,
            'email' => $request ->email,
            'message' => $request ->message,
        ];
        Mail::to ('janvier@techaffinity.com')->send(new VisitorContact($data));
        Session::flash('message', "Thank you for your email");
        return redirect()->route('contact.show');
        
    }
}


