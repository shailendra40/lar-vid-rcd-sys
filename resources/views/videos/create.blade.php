<!-- <!DOCTYPE html>
<html>
<head>
    <title>Upload Video</title>
</head>
<body>
    <h1>Upload a New Video</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="video">Select Video:</label>
            <input type="file" id="video" name="video" accept="video/*" required>
        </div>

        <button type="submit">Upload Video</button>
    </form>

    <a href="{{ route('videos.index') }}">Back to Video List</a>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>Upload or Record Video</title>
</head>
<body>
    <h1>Upload or Record a New Video</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="video">Select Video:</label>
            <input type="file" id="video" name="video" accept="video/*">
        </div>

        <button type="submit">Upload Video</button>
    </form>

    <h2>Or Record a New Video</h2>
    <div>
        <video id="recording" width="320" height="240" controls></video>
        <br>
        <button id="startRecording">Start Recording</button>
        <button id="stopRecording" disabled>Stop Recording</button>
        <br>
        <button id="uploadRecording" disabled>Upload Recording</button>
    </div>

    <a href="{{ route('videos.index') }}">Back to Video List</a>

    <script>
        let mediaRecorder;
        let recordedBlobs;

        const errorMsgElement = document.querySelector('span#errorMsg');
        const recordedVideo = document.querySelector('video#recording');
        const startButton = document.getElementById('startRecording');
        const stopButton = document.getElementById('stopRecording');
        const uploadButton = document.getElementById('uploadRecording');

        startButton.addEventListener('click', async () => {
            const constraints = {
                audio: true,
                video: true
            };

            try {
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                handleSuccess(stream);
            } catch (e) {
                console.error('navigator.getUserMedia error:', e);
            }
        });

        stopButton.addEventListener('click', () => {
            mediaRecorder.stop();
            stopButton.disabled = true;
            startButton.disabled = false;
            uploadButton.disabled = false;
        });

        uploadButton.addEventListener('click', () => {
            const blob = new Blob(recordedBlobs, { type: 'video/webm' });
            const formData = new FormData();
            formData.append('title', 'Recorded Video');
            formData.append('video', blob, 'recorded_video.webm');

            fetch('{{ route('videos.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    window.location.href = '{{ route('videos.index') }}';
                } else {
                    console.error('Upload failed');
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        });

        function handleSuccess(stream) {
            startButton.disabled = true;
            stopButton.disabled = false;

            const options = { mimeType: 'video/webm;codecs=vp9' };
            recordedBlobs = [];
            mediaRecorder = new MediaRecorder(stream, options);

            mediaRecorder.onstop = (event) => {
                console.log('Recorder stopped: ', event);
                console.log('Recorded Blobs: ', recordedBlobs);
                recordedVideo.controls = true;
            };

            mediaRecorder.ondataavailable = handleDataAvailable;
            mediaRecorder.start(10); // collect 10ms of data
        }

        function handleDataAvailable(event) {
            console.log('handleDataAvailable', event);
            if (event.data && event.data.size > 0) {
                recordedBlobs.push(event.data);
            }
        }
    </script>
</body>
</html>
