<x-Layout>
  <x-slot:heading>
    Calendar
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
      .w-1\/7 {
        width: 14.2857143%;
      }
    </style>
  </head>
  <body class="bg-gray-100">

    <div class="container mx-auto mt-2 shadow-xl rounded-lg">
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="flex items-center justify-between py-2 px-6 bg-red-600 border-b">
          <div>
            <span id="monthYear" class="text-lg font-bold text-white"></span>
          </div>
          <div class="border rounded-lg px-1">
            <button id="prevMonth" class="py-1 inline-flex items-center justify-center leading-none rounded-lg hover:bg-red-700 transition duration-100 ease-in-out">
              <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            <button id="nextMonth" class="py-1 inline-flex items-center justify-center leading-none rounded-lg hover:bg-red-700 transition duration-100 ease-in-out">
              <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="-mx-1 -mb-1">
          <div class="flex flex-wrap">
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Mon</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Tue</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Wed</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Thu</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Fri</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Sat</div>
            </div>
            <div class="w-1/7 py-2">
              <div class="text-gray-500 text-sm uppercase tracking-wide text-center">Sun</div>
            </div>
          </div>
          <div id="calendarDays" class="flex flex-wrap border-t border-r">
            <!-- Days will be populated here by JavaScript -->
          </div>
        </div>
      </div>
    </div>

    <script src="scrip.js"></script>
  </body>
  </html>

</x-Layout>