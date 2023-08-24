<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $expression = $request->input('expression');
        $result = eval('return '.$expression.';');
        return view('calculator', compact('result'));
    }
}

