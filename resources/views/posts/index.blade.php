<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Table</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-4 rounded">
        <strong>Success:</strong> {{ session('success') }}
    </div>

@endif

@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded">
        <strong>Error:</strong> {{ session('error') }}
    </div>
@endif

<div class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Posts</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Description</th>
                    </tr>
                </thead>
                <td>
                    @foreach($posts as $post)
                    <tr class="border-b hover:bg-gray-100 transition duration-300">
                        <td class="py-3 px-6">{{$post->title}}</td>
                        <td class="py-3 px-6">{{$post->content}}</td>
                    </tr>
                    @endforeach
                </td>
            </table>
        </div>
    </div>
</div>
</body>
</html>
