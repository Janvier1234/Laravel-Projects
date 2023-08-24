<?php

// app/Http/Controllers/UrlController.php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        $urls = Url::latest()->get();

        return view('url.index', compact('urls'));
    }

    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');
        $shortCode = Str::random(6);

        Url::create([
            'original_url' => $url,
            'short_code' => $shortCode,
        ]);

        return redirect()->route('home')->with('success', 'URL shortened successfully!');
    }

    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();

        return redirect($url->original_url);
    }
}
