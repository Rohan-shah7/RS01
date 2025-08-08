<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <div class="relative z-10 flex flex-col items-center justify-center min-h-[80vh] px-6 text-center">
        <!-- Heading -->
        <h1 class="text-4xl sm:text-6xl font-bold mb-4">
            Welcome to <span class="bg-white text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-pink-500">My Laravel App</span>
        </h1>

        <!-- Subtitle -->
        <p class="max-w-2xl text-lg sm:text-xl text-gray-100 mb-8">
            Your modern web experience, powered by Laravel & Tailwind CSS.
        </p>

        <!-- Buttons -->
        <div class="flex flex-wrap gap-4 justify-center">
            <a
               href="#"
               class="px-6 py-3 rounded-lg bg-yellow-400 text-black font-semibold hover:bg-yellow-300 transition">
               Get Started
            </a>
            <a
               href="#"
               class="px-6 py-3 rounded-lg border border-white hover:bg-white hover:text-indigo-600 transition">
               Learn More
            </a>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="py-16 bg-white text-gray-800">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="text-indigo-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fast Development</h3>
                <p class="text-gray-600">Leverage Laravel's powerful backend and Tailwind's utility-first design for rapid prototyping.</p>
            </div>

            <!-- Card 2 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="text-indigo-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Secure by Default</h3>
                <p class="text-gray-600">CSRF protection, authentication scaffolding, and robust security features out of the box.</p>
            </div>

            <!-- Card 3 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="text-indigo-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 17l4 4 4-4m0-10l-4-4-4 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Scalable Architecture</h3>
                <p class="text-gray-600">Grow your app with Laravel’s powerful ORM, queues, and service container.</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
