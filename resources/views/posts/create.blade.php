<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <h1>Create a Post</h1>
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Title">
        <label for="content">Content:</label>
        <br>
        <textarea name="content" placeholder="Content"></textarea>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>
