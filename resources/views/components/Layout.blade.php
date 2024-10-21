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
        <div class="mx-auto min-w-[3500px] px-4 sm:px-6 lg:px-8">
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
        <div class="mx-auto max-w-9xl py-2 sm:px-4 lg:px-8"></div>
        <!-- Your content -->
        {{ $slot }}
      </main>
    </div>
</body>

<footer class="bg-black text-white py-4">
  <div class="container mx-auto text-center">
    <p>&copy; 2024 F1. All rights reserved.</p>
    <div class="flex justify-center mt-2">
      <a href="/" class="hover:text-gray-400 text-white mx-2">Home</a>
      <a href="/drivers" class="hover:text-gray-400 text-white mx-2">Drivers</a>
      <a href="/teams" class="hover:text-gray-400 text-white mx-2">Teams</a>
      <a href="/calendar" class="hover:text-gray-400 text-white mx-2">Calendar</a>
      <a href="/tracks" class="hover:text-gray-400 text-white mx-2">Tracks</a>
    </div>
    <div class="mt-3 flex flex-align justify-center">
      <a href="https://www.facebook.com/Formula1/?locale=en_GB">
        <svg class="h-6 w-6 text-white hover:text-blue-600 mx-3 mt-[2px]"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z"/>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
        </svg>
      </a>
      <a href="https://x.com/F1?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
        <svg class="h-6 w-6 text-white hover:text-gray-300 mx-3 mt-[2px]"  width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
          <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
        </svg> 
      </a>
      <a href="https://www.instagram.com/f1/">
        <svg class="h-7 w-7 transition-colors duration-300 mx-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <defs>
            <linearGradient id="instagramGradient" x1="0%" y1="100%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#FEDA77; stop-opacity:1" /> <!-- Yellow -->
              <stop offset="100%" style="stop-color:#D62976; stop-opacity:1" /> <!-- Purple -->
            </linearGradient>
          </defs>
          <path stroke="none" d="M0 0h24v24H0z" />
          <rect class="base" x="4" y="4" width="16" height="16" rx="4" stroke="white" fill="none" />
          <circle class="base" cx="12" cy="12" r="3" stroke="white" fill="none" />
          <line class="base" x1="16.5" y1="7.5" x2="16.5" y2="7.501" stroke="white" />
        </svg>

        <style>
          .base {
            transition: stroke 0.3s ease; /* Smooth transition for the stroke */
          }
          svg:hover .base {
            stroke: url(#instagramGradient); /* Change stroke to gradient on hover */
          }
        </style>
      </a>
    </div>
  </div>
</footer>
