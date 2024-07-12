<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // 'video' => 'required|file|mimes:mp4,avi,mov|max:102400', // Limit to 100MB
            'video' => 'required|file|mimes:mp4,avi,mov,webm|max:102400', // Limit to 100MB
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $videoPath,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully.');
    }
}
