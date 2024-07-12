<!DOCTYPE html>
<html>
<head>
    <title>Videos</title>
</head>
<body>
    <h1>Video List</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @forelse($videos as $video)
            <li>{{ $video->title }}</li>
        @empty
            <li>No videos available</li>
        @endforelse
    </ul>

    <a href="{{ route('videos.create') }}">Upload New Video</a>
</body>
</html>
