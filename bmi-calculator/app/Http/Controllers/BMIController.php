<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index()
    {
        return view('bmi.index');
    }

    public function calculate(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');
        
        // Perform the BMI calculation
        $bmi = $weight / ($height  * $height);

        return view('bmi.result', compact('bmi'));
    }
}
