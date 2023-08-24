<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
     public function index($limit)
    {
        $fibonacci = $this->generateFibonacci($limit);
        return view('fibonacci.index', compact('fibonacci'));
    }

    private function generateFibonacci($limit)
    {
        $limit=20;
        $fib = [0, 1];

        while (end($fib) < $limit) {
            $fib[] = end($fib) + prev($fib);
        }

        return $fib;
    }
}
