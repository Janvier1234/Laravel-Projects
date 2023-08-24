<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;


class FileController extends Controller
{
    public function index()
    {
        $files = File::latest()->get();
        return view('file.index', compact('files'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // Adjust allowed file types and size as needed
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName);

        File::create([
            'filename' => $fileName,
            'path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
}
