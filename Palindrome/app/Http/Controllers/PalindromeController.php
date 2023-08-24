<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function index()
    {
        return view('palindrome');
    }

    public function checkPalindrome(Request $request)
    {
        $string = $request->input('string');
        $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
        $isPalindrome = $string === strrev($string);

        return view('palindrome', ['result' => $isPalindrome]);
    }
}
