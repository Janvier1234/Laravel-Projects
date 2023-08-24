<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordCountController extends Controller
{
    public function countWords()
    {
        // Sample text for demonstration purposes, you can replace this with actual user input
        $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod. thank you";

        $wordCount = str_word_count($text);

        return view('word-count', compact('wordCount', 'text'));
    }
}
