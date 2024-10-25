<x-layout>
  <x-slot:heading>
    {{ $driver->name }}
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>
        <div class="bg-white">
            <div class="pt-6">
                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-7xl px-6 pb-8 grid grid-cols-3 gap-6 border-b-2 border-black">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block self-center max-h-96">
                        <img src="" alt="pics">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="" alt="pics">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="" alt="pics">
                    </div>
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block max-h-96">
                        <img src="" alt="pics">
                    </div>
                </div>

                <!-- Product info -->
                <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8">
                    <div class="lg:col-span-2 lg:border-r-2 lg:border-black lg:pr-8 grid grid-cols-2 grid-rows-1">
                        <img src="" alt="flag" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl justify-self-end">{{ $driver->name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <a href="/" class="text-3xl font-bold tracking-tight text-black pb-5 hover:text-black">team</a>
                      <p class="text-3xl font-bold tracking-tight text-black pt-5 pb-5">number</p>
                      <p class="text-xl tracking-tight text-black pb-5">Age:</p>
                      <p class="text-xl tracking-tight text-black pb-5">F1 debut:</p>
                      <p class="text-xl tracking-tight text-black pb-5">Best Season:</p>
                      <p class="text-xl tracking-tight text-black pb-5">Podiums:</p>
                      <p class="text-xl tracking-tight text-black pb-5">Career Points:</p>
                      <p class="text-xl tracking-tight text-black pb-5">Season Points:</p>
                      <p class="text-xl tracking-tight text-black pb-5">World Drivers Championships:</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r-2 lg:border-black lg:pb-0 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 whitespace-pre-line">bio</p>
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


</x-layout>
