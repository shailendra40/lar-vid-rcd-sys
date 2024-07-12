<!-- <!DOCTYPE html>
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
</html> -->


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
            <li>
                <h3>{{ $video->title }}</h3>
                <p>{{ $video->description }}</p>
                <video width="320" height="240" controls>
                    <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                    Your browser does not support the video tag.
                </video>
            </li>
        @empty
            <li>No videos available</li>
        @endforelse
    </ul>

    <a href="{{ route('videos.create') }}">Upload or Record New Video</a>
</body>
</html>
