<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>{{ $seo->title ?? 'LinkTree' }}</title>

    {{-- Meta --}}
    <meta property="og:type" content="siteweb" />

    <meta name="robots" content="all">
    <meta name="description" content="{{ $seo->description }}" />
    <meta name="author" content="{{ $seo->author }}" />

    <meta property="og:site_name" content="{{ $seo->title }}" />
    <meta property="og:title" content="{{ $seo->title }}" />
    <meta property="og:description" content="{{ $seo->description }}" />
    <meta property="og:url" content="{{ $seo->url }}" />

    <meta property="og:image" content="{{ env('APP_URL') . $bio->avatar }}" />
    <meta property="og:image:secure_url" content="{{ env('APP_URL') . $bio->avatar }}" />

    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <link rel="icon" type="image/png" href="{{ env('APP_URL') . $bio->avatar }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800 antialiased">

    <div class="mx-5">
        <div class="">
            <!-- User Profile Picture -->
            <div class="bg-mirage-500 mx-auto my-20 h-auto max-w-sm overflow-hidden rounded-sm shadow-lg">
                <img class="mx-auto mt-8 h-48 w-48 rounded-full border-4 border-white object-cover p-1"
                    src="{{ $bio->avatar ?? asset('images/no-image-icon.png') }}" alt="El Rincon de Isma" />
                <div class="px-6 py-4 text-white">
                    <div class="flex flex-col">
                        <a href="{{ $seo->url }}" target="_blank" rel="noopener noreferrer">
                            <div class="text-center text-xl font-bold hover:cursor-pointer">{{ $bio->title }}</div>
                        </a>
                        <p class="text-center text-sm">{{ $bio->description }}</p>
                    </div>
                </div>
                <!-- Social Media Links -->
                @foreach ($socials as $social)
                    @if (isset($social->url))
                        <div class="text-mirage-500 mx-auto flex flex-col">
                            <a href="{{ $social->url }}" target="__blank"
                                class="{{ $social->color }} mx-auto my-2 flex w-3/4 flex-row rounded-lg py-2 pl-2 text-xl text-white">
                                <div class="mx-auto flex flex-row">
                                    {!! Blade::render($social->icon) !!}
                                    <h4 class="mx-5 my-auto font-semibold">{{ $social->social }}</h4>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
                {{-- <div class="flex flex-col mx-auto text-mirage-500">
                  <a href="https://twitter.com/KennKibadi" target="__blank" class="flex flex-row mx-auto my-2 bg-red-500 w-3/4 text-white py-2 pl-2 rounded-md  text-xl">
                    <div class="flex flex-row mx-auto">
                        <x-bi-youtube class="w-8 h-8" />
                        <h4 class="my-auto font-semibold mx-5">Youtube</h4>
                    </div>
                  </a>
                </div> --}}
                <!-- Footer -->
                <div class="mb-4 mt-12 text-center text-xs text-white">Built by <a href="https://github.com/laguillo"
                        target="__blank" class="border-b-2 border-b-purple-500"> Eduardo Lago</a></div>
            </div>
        </div>
    </div>
</body>

</html>
