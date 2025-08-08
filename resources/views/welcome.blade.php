
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

    <style>
      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .fade-in-up {
        animation: fadeInUp 1s ease-out forwards;
      }

  </style>

           @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white/80 backdrop-blur-lg rounded-3xl shadow-xl text-center max-w-xl w-full p-10 fade-in-up">

      <p class="text-lg text-gray-600 mb-6">
        Thank you for visiting. We're glad you're here. Let’s build something amazing together.
      </p>


      <a href="#"
         class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-indigo-700 transition duration-300">
        Get Started
      </a>
    </div>

  </body>
</html>
