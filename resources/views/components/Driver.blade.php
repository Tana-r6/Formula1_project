<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $heading }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<body class="h-full">
    <div class="min-h-full">
      <nav class="bg-red-600 fixed z-50 shadow-lg">
        <div class="mx-auto max-w-15xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <a href="/"><img class="h-13 w-13" src="https://www.formula1.com/etc/designs/fom-website/images/f1_logo.svg" alt="F1"></a>
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/" class=" {{ request()->is('/') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                  <a href="/drivers" class=" {{ request()->is('drivers') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Drivers</a>
                  <a href="/teams" class=" {{ request()->is('teams') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Teams</a>
                  <a href="/calendar" class=" {{ request()->is('calendar') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                  <a href="/tracks" class=" {{ request()->is('tracks') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Tracks</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-3 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class=" {{ request()->is('/') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            <a href="/drivers" class=" {{ request()->is('drivers') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Drivers</a>
            <a href="/teams" class=" {{ request()->is('teams') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Teams</a>
            <a href="/calendar" class=" {{ request()->is('calendar') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
            <a href="/tracks" class=" {{ request()->is('tracks') ? 'bg-gray-900 text-white': 'text-white hover:bg-red-700 hover:text-gray-200'}} rounded-md px-3 py-2 text-sm font-medium">Tracks</a>
          </div>
        </div>
      </nav>

      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 max-h-[80px]">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
      </header>
      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
      </header>
      <main>
        <div class="mx-auto max-w-9xl py-6 sm:px-4 lg:px-8"></div>
        <!-- Your content -->
        {{ $slot }}
        <!--
        This example requires some changes to your config:
  
        ```
        // tailwind.config.js
        module.exports = {
        // ...
        theme: {
            extend: {
            gridTemplateRows: {
            '[auto,auto,1fr]': 'auto auto 1fr',
            },
        },
        },
            plugins: [
        // ...
        require('@tailwindcss/aspect-ratio'),
            ],
        }
        ```
        -->
        <div class="bg-white">
            <div class="pt-6">
                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-7xl px-6 pb-8 grid grid-cols-3 gap-6 border-b-2 border-{{ $colour }}">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block self-center max-h-96">
                        <img src={{ $pic1 }}>
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src={{ $pic2 }}>
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src={{ $pic3 }}>
                    </div>
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block max-h-96">
                        <img src={{ $pic4 }}>
                    </div>
                </div>

                <!-- Product info -->
                <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8">
                    <div class="lg:col-span-2 lg:border-r-2 lg:border-{{ $colour }} lg:pr-8 grid grid-cols-2 grid-rows-1">
                        <img src={{ $flag }} class="rounded-lg border-2 border-grey-700 max-h-10">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl justify-self-end">{{ $heading }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <a href="{{ $link }}" class="text-3xl font-bold tracking-tight text-black pb-5 hover:text-{{ $colour }}">{{ $team }}</a>
                      <p class="text-3xl font-bold tracking-tight text-{{ $colour }} pt-5 pb-5">{{ $number }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">Age: {{ $age }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">F1 debut: {{ $debut }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">Best Season: {{ $bestseason }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">Podiums: {{ $podiums }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">Career Points: {{ $cpoints }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">Season Points: {{ $spoints }}</p>
                      <p class="text-xl tracking-tight text-black pb-5">World Drivers Championships: {{ $wdcs }}</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r-2 lg:border-{{ $colour }} lg:pb-0 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 whitespace-pre-line">{{ $bio }}</p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900"></h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>
    </div>
</body>

<footer class="bg-black text-white py-4">
  <div class="container mx-auto text-center">
    <p>&copy; 2024 F1. All rights reserved.</p>
    <div class="flex justify-center space-x-4 mt-2">
      <a href="/" class="hover:text-gray-400 text-white">Home</a>
      <a href="/drivers" class="hover:text-gray-400 text-white">Drivers</a>
      <a href="/teams" class="hover:text-gray-400 text-white">Teams</a>
      <a href="/calendar" class="hover:text-gray-400 text-white">Calendar</a>
      <a href="/tracks" class="hover:text-gray-400 text-white">Tracks</a>
    </div>
    <div class="mt-4 flex felx-align justify-center">
      <a href="https://www.facebook.com/Formula1/?locale=en_GB">
        <svg class="h-6 w-6 text-white hover:text-gray-400 mx-3"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z"/>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
        </svg>
      </a>
      <a href="https://x.com/F1?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
        <svg class="h-6 w-6 text-white hover:text-gray-400 mx-3"  width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
          <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
        </svg> 
      </a>
      <a href="https://www.instagram.com/f1/">
        <svg class="h-6 w-6 text-white hover:text-gray-400 mx-3"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z"/>
          <rect x="4" y="4" width="16" height="16" rx="4" />
          <circle cx="12" cy="12" r="3" />
          <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
        </svg>
      </a>
    </div>
  </div>
</footer>
