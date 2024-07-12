<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mov,avi|max:20000',
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
