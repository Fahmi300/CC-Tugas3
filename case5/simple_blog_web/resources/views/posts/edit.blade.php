<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $post->title }}" required>
    <br>
    <label>Content:</label>
    <textarea name="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
