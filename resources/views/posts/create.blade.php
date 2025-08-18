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
    <form action="{{ route('posts.store') }}" method="POST" class="w-full min-h-screen flex items-center justify-center ">
        @csrf
        <div class="w-full max-w-md shadow-lg p-4">
            <div class="p-5">
                <h1 class="text-xl font-bold mb-4">Create a Post</h1>
                <label for="title" class="block mb-2">Title:</label>
                <input type="text" name="title" required placeholder="Title" class="border p-2 w-full mb-4">
                <label for="content" class="block mb-2">Content:</label>

                <textarea name="content" required placeholder="Content" class="border p-2 w-full mb-4"></textarea>
                <button type="submit" class="w-full bg-blue-500 text-white py-2">Create Post</button>
            </div>
        </div>
    </form>
</body>
</html>
