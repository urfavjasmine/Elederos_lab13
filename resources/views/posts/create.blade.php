<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="body">Content:</label>
        <textarea name="body" id="body" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
</body>

</html>