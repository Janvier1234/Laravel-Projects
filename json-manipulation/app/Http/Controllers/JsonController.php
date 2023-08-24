<?php

// app/Http/Controllers/JsonController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function readJson()
    {
        $jsonData = file_get_contents(public_path('data.json'));
        $data = json_decode($jsonData, true);
        
        return view('json.read', ['data' => $data]);
    }
}
