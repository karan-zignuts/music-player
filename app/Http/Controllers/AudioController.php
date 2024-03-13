<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function upload(Request $request) 
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'audio_file' => 'required|mimes:mp3,wav',
        ]);

        // Get the uploaded file
        $audioFile = $request->file('audio_file');

        // Move the uploaded file to the public directory
        $fileName = time() . '_' . $audioFile->getClientOriginalName();
        $filePath = $audioFile->move(public_path('upload'), $fileName);

        // You can store the file path in the database if needed
        // $audio = new Audio();
        // $audio->file_path = $filePath;
        // $audio->save();

        // Return a success response or redirect back with a success message
        return redirect()->back()->with('success', 'Audio file uploaded successfully.');

        $request->validate([
            'audio_file' => 'required|file|max:10240', // Maximum file size 10MB
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

    }
}

