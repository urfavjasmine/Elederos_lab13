<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->post_id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->post_id) }}">View</a>
                    <a href="{{ route('posts.edit', $post->post_id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->post_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>