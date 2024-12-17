<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .post {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            margin:20px;
        }
        .post h2 {
            font-size: 1.8em;
            margin: 0;
        }
        .post p {
            font-size: 1em;
            color: #555;
            margin: 10px 0;
        }
        .post a {
            color: blue;
            text-decoration: none;
        }
        .post a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>

    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>
                {{ Str::limit($post->content, 100, '...') }}
            </p>
            <a href="{{ route('posts.show', $post->id) }}">Read More</a>
        </div>
    @endforeach
</body>
</html>
