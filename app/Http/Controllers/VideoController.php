<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // Display list of videos
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mov,avi|max:20000', // Example validation rules
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $videoPath,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully.');
    }

    // Additional methods for recording, editing, deleting videos
}
