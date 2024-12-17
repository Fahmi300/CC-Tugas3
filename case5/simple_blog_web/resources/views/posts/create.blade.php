<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    <br>
    <label>Content:</label>
    <textarea name="content" required></textarea>
    <br>
    <button type="submit">Save</button>
</form>
