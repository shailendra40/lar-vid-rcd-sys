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
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .video-js .vjs-control-bar {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video-js id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240" data-setup="{}">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video-js>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
</body>
</html> -->

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video-js id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240" data-setup="{}">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video-js>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () { -->
            <!-- // Loop through each video element
            @foreach($videos as $video)
                var player = videojs('my-video-{{ $video->id }}');

                // Create forward button
                var Button = videojs.getComponent('Button');
                var forwardButton = videojs.extend(Button, {
                    constructor: function() {
                        Button.apply(this, arguments);
                        this.addClass('vjs-forward');
                        this.controlText('Forward 10 seconds');
                    },
                    handleClick: function() {
                        player.currentTime(player.currentTime() + 10);
                    }
                });
                videojs.registerComponent('forwardButton', forwardButton);
                player.getChild('controlBar').addChild('forwardButton', {});

                // Create backward button
                var backwardButton = videojs.extend(Button, {
                    constructor: function() {
                        Button.apply(this, arguments);
                        this.addClass('vjs-backward');
                        this.controlText('Backward 10 seconds');
                    },
                    handleClick: function() {
                        player.currentTime(player.currentTime() - 10);
                    }
                });
                videojs.registerComponent('backwardButton', backwardButton);
                player.getChild('controlBar').addChild('backwardButton', {});
            @endforeach
        });
    </script>
</body>
</html> -->

            <!-- vid not forward -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
            color: white;
            background: #333;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video-js id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240" data-setup="{}">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video-js>
                            <button class="vjs-forward" data-id="my-video-{{ $video->id }}">Forward 10s</button>
                            <button class="vjs-backward" data-id="my-video-{{ $video->id }}">Backward 10s</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Loop through each video element
            @foreach($videos as $video)
                var player = videojs('my-video-{{ $video->id }}');

                // Event listener for forward button
                document.querySelector('.vjs-forward[data-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    player.currentTime(player.currentTime() + 10);
                });

                // Event listener for backward button
                document.querySelector('.vjs-backward[data-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    player.currentTime(player.currentTime() - 10);
                });
            @endforeach
        });
    </script>
</body>
</html> -->





<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video-js id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240" data-setup="{}">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video-js>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () { -->
            <!-- // Loop through each video element
            @foreach($videos as $video)
                var player = videojs('my-video-{{ $video->id }}');

                // Create forward button
                var Button = videojs.getComponent('Button');
                var forwardButton = videojs.extend(Button, {
                    constructor: function() {
                        Button.apply(this, arguments);
                        this.addClass('vjs-forward');
                        this.controlText('Forward 10 seconds');
                    },
                    handleClick: function() {
                        player.currentTime(player.currentTime() + 10);
                    }
                });
                videojs.registerComponent('forwardButton', forwardButton);
                player.getChild('controlBar').addChild('forwardButton', {});

                // Create backward button
                var backwardButton = videojs.extend(Button, {
                    constructor: function() {
                        Button.apply(this, arguments);
                        this.addClass('vjs-backward');
                        this.controlText('Backward 10 seconds');
                    },
                    handleClick: function() {
                        player.currentTime(player.currentTime() - 10);
                    }
                });
                videojs.registerComponent('backwardButton', backwardButton);
                player.getChild('controlBar').addChild('backwardButton', {});
            @endforeach
        });
    </script>
</body>
</html> -->






<!-- vid forward -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
            color: white;
            background: #333;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video>
                            <div>
                                <button class="vjs-forward" data-id="my-video-{{ $video->id }}">Forward 10s</button>
                                <button class="vjs-backward" data-id="my-video-{{ $video->id }}">Backward 10s</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () { -->
            <!-- // Loop through each video element
            @foreach($videos as $video)
                var player = videojs('my-video-{{ $video->id }}');

                // Event listener for forward button
                document.querySelector('.vjs-forward[data-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    player.currentTime(player.currentTime() + 10);
                });

                // Event listener for backward button
                document.querySelector('.vjs-backward[data-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    player.currentTime(player.currentTime() - 10);
                });
            @endforeach
        });
    </script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
            color: white;
            background: #333;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video>
                            <div>
                                <button class="vjs-forward" data-player-id="my-video-{{ $video->id }}">Forward 10s</button>
                                <button class="vjs-backward" data-player-id="my-video-{{ $video->id }}">Backward 10s</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () { -->
            <!-- // Loop through each video element
            @foreach($videos as $video)
                var player{{ $video->id }} = videojs('my-video-{{ $video->id }}');

                // Event listener for forward button
                document.querySelector('.vjs-forward[data-player-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    var playerId = this.getAttribute('data-player-id');
                    var player = videojs(playerId);
                    player.currentTime(player.currentTime() + 10);
                });

                // Event listener for backward button
                document.querySelector('.vjs-backward[data-player-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    var playerId = this.getAttribute('data-player-id');
                    var player = videojs(playerId);
                    player.currentTime(player.currentTime() - 10);
                });
            @endforeach
        });
    </script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Videos</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Video.js CSS -->
    <!-- <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-forward, .vjs-backward {
            font-size: 20px;
            padding: 10px;
            color: white;
            background: #333;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video>
                            <div>
                                <button class="vjs-play" data-player-id="my-video-{{ $video->id }}">Play Video</button>
                                <button class="vjs-forward" data-player-id="my-video-{{ $video->id }}">Forward 10s</button>
                                <button class="vjs-backward" data-player-id="my-video-{{ $video->id }}">Backward 10s</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
    </div> -->

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- Video.js JS -->
    <!-- <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () { -->
            <!-- // Loop through each video element
            @foreach($videos as $video)
                var player{{ $video->id }} = videojs('my-video-{{ $video->id }}');

                // Event listener for play button
                document.querySelector('.vjs-play[data-player-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    var playerId = this.getAttribute('data-player-id');
                    var player = videojs(playerId);
                    if (player.paused()) {
                        player.play();
                        this.textContent = 'Pause';
                    } else {
                        player.pause();
                        this.textContent = 'Play Video';
                    }
                });

                // Event listener for forward button
                document.querySelector('.vjs-forward[data-player-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    var playerId = this.getAttribute('data-player-id');
                    var player = videojs(playerId);
                    player.currentTime(player.currentTime() + 10);
                });

                // Event listener for backward button
                document.querySelector('.vjs-backward[data-player-id="my-video-{{ $video->id }}"]').addEventListener('click', function() {
                    var playerId = this.getAttribute('data-player-id');
                    var player = videojs(playerId);
                    player.currentTime(player.currentTime() - 10);
                });
            @endforeach
        });
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>Videos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Video.js CSS -->
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <style>
        body {
            padding: 20px;
        }
        .video-container {
            margin-bottom: 20px;
        }
        .vjs-play-control, .vjs-mute-control, .vjs-volume-control {
            font-size: 20px;
            padding: 10px;
            color: white;
            background: #333;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }
        .vjs-backward {
            background-color: #007bff; /* Blue */
        }
        .vjs-forward {
            background-color: #28a745; /* Green */
        }
        .vjs-play-control {
            background-color: #dc3545; /* Red */
        }
        .vjs-mute-control {
            background-color: #ffc107; /* Yellow */
        }
        .vjs-volume-control {
            background-color: #6c757d; /* Gray */
        }
        .video-js .vjs-control-bar {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .vjs-big-play-button {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Video List</h1>

        <div class="row">
            @forelse($videos as $video)
                <div class="col-md-4 video-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <video id="my-video-{{ $video->id }}" class="video-js vjs-default-skin" controls preload="auto" width="320" height="240">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/{{ pathinfo($video->video_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video>
                            <div class="mt-2">
                                <button class="vjs-play-control btn btn-dark" data-id="{{ $video->id }}">Play</button>
                                <button class="vjs-backward btn btn-primary" data-id="{{ $video->id }}">Backward 10s</button>
                                <button class="vjs-forward btn btn-success" data-id="{{ $video->id }}">Forward 10s</button>
                                <button class="vjs-mute-control btn btn-warning" data-id="{{ $video->id }}">Mute</button>
                                <button class="vjs-volume-control btn btn-secondary" data-id="{{ $video->id }}">Volume Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">No videos available</div>
                </div>
            @endforelse
        </div>

        <a href="{{ route('videos.create') }}" class="btn btn-primary mt-4">Upload or Record New Video</a>
        
        <!-- External Volume Control Button -->
        <div class="mt-3">
            <button class="external-volume-control btn btn-secondary">External Volume Up</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Video.js JS -->
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize each video player
            @foreach($videos as $video)
                var player{{ $video->id }} = videojs('my-video-{{ $video->id }}');

                // Event listener for play/pause button
                var playPauseBtn{{ $video->id }} = document.querySelector('.vjs-play-control[data-id="{{ $video->id }}"]');
                playPauseBtn{{ $video->id }}.addEventListener('click', function() {
                    if (player{{ $video->id }}.paused()) {
                        player{{ $video->id }}.play();
                        playPauseBtn{{ $video->id }}.textContent = 'Pause';
                    } else {
                        player{{ $video->id }}.pause();
                        playPauseBtn{{ $video->id }}.textContent = 'Play';
                    }
                });

                // Event listener for mute/unmute button
                var muteBtn{{ $video->id }} = document.querySelector('.vjs-mute-control[data-id="{{ $video->id }}"]');
                muteBtn{{ $video->id }}.addEventListener('click', function() {
                    if (player{{ $video->id }}.muted()) {
                        player{{ $video->id }}.muted(false);
                        muteBtn{{ $video->id }}.textContent = 'Mute';
                    } else {
                        player{{ $video->id }}.muted(true);
                        muteBtn{{ $video->id }}.textContent = 'Unmute';
                    }
                });

                // Event listener for backward button
                var backwardBtn{{ $video->id }} = document.querySelector('.vjs-backward[data-id="{{ $video->id }}"]');
                backwardBtn{{ $video->id }}.addEventListener('click', function() {
                    var currentTime = player{{ $video->id }}.currentTime();
                    player{{ $video->id }}.currentTime(Math.max(0, currentTime - 10)); // Go backward 10 seconds, prevent negative time
                });

                // Event listener for forward button
                var forwardBtn{{ $video->id }} = document.querySelector('.vjs-forward[data-id="{{ $video->id }}"]');
                forwardBtn{{ $video->id }}.addEventListener('click', function() {
                    var currentTime = player{{ $video->id }}.currentTime();
                    player{{ $video->id }}.currentTime(currentTime + 10); // Go forward 10 seconds
                });

            @endforeach

            // External Volume Control Button
            var externalVolumeBtns = document.querySelectorAll('.external-volume-control');
            externalVolumeBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var targetVideoId = this.getAttribute('data-video-id');
                    var targetPlayer = videojs('my-video-' + targetVideoId);
                    var currentVolume = targetPlayer.volume();
                    targetPlayer.volume(Math.min(1, currentVolume + 0.1)); // Increase volume by 0.1 (adjust as needed)
                    if (targetPlayer.muted()) {
                        targetPlayer.muted(false);
                        muteBtn{{ $video->id }}.textContent = 'Mute';
                    }
                });
            });
        });
    </script>
</body>
</html>
