<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Generate a random number between 1 and 100
        $randomNumber = rand(1, 100);
        // Store the random number in the session
        session(['randomNumber' => $randomNumber]);

        return view('guess', compact('randomNumber'));
    }

    public function checkGuess(Request $request)
    {
        $randomNumber = session('randomNumber');
        $userGuess = $request->input('guess');

        if ($userGuess == $randomNumber) {
            $message = "Congratulations! You guessed the correct number.";
        } elseif ($userGuess < $randomNumber) {
            $message = "Try again! The number is higher.";
        } else {
            $message = "Try again! The number is lower.";
        }

        return view('guess', compact('randomNumber', 'message'));
    }
}
