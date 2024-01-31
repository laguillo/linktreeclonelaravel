<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-600">
        <div class="mx-5">
            <div class="">
              <!-- User Profile Picture -->
              <div class="max-w-sm h-auto mx-auto my-20 rounded-sm overflow-hidden shadow-lg bg-mirage-500">
                <img class="object-cover rounded-full h-48 w-48 mx-auto mt-8 p-1 border-4 border-white" src="{{ $avatar ?? 'https://i.blogs.es/ceda9c/dalle/1366_2000.jpg' }}" alt="El Rincon de Isma" />
                <div class="px-6 py-4 text-white">
                  <div class="flex flex-col">
                    <div class="font-bold text-xl text-center hover:cursor-pointer">{{ $bio->title }}</div>
                    <p class="text-sm text-center">{{ $bio->description }}</p>
                  </div>
                </div>
                <!-- Social Media Links -->
                <div class="flex flex-col mx-auto text-mirage-500">
                  <a href="https://twitter.com/KennKibadi" target="__blank" class="flex flex-row mx-auto my-2 bg-red-500 w-3/4 text-white py-2 pl-2 rounded-md  text-xl">
                    <div class="flex flex-row mx-auto">
                        <x-bi-youtube class="w-8 h-8" />
                        <h4 class="my-auto font-semibold mx-5">Youtube</h4>
                    </div>
                  </a>
                </div>
                <!-- Footer -->
                <div class="text-white text-xs text-center mt-12 mb-4">Built by <a href="https://elrincondeisma.com" target="__blank" class="border-b-purple-500 border-b-2"> ElRinconDeIsma</a></div>
              </div>
            </div>
          </div>

    </body>
</html>
