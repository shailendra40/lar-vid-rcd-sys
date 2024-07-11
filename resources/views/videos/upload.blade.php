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
        <input type="file" id="video" name="video" accept="video/mp4, video/mov, video/avi" required>
    </div>

    <button type="submit">Upload Video</button>
</form>
