<x-layout>
  <x-slot:heading>
    {{ $driver->name }}
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>
        <div class="bg-white">
            <div class="pt-6">
                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-7xl px-6 pb-8 grid grid-cols-3 gap-6 border-b-2 border-{{ $driver->colour }}">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block self-center max-h-96">
                        <img src="{{ $driver->pic1 }}" alt="pics">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img class="" src="{{ $driver->pic2 }}" alt="pics">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="{{ $driver->pic3 }}" alt="pics">
                    </div>
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block max-h-96">
                        <img src="{{ $driver->pic4 }}" alt="pics">
                    </div>
                </div>

                <!-- Product info -->
                <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8">
                    <div class="pb-6 lg:col-span-2 border-r-2 border-{{ $driver->colour }} lg:pr-8 grid grid-cols-2 grid-rows-1">
                        <img src="{{ $driver->flag }}" alt="flag" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <h1 class="text-2xl font-audiowide tracking-tight text-{{ $driver->colour }} sm:text-3xl justify-self-end">{{ $driver->name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <a href="/teams/{{ $driver->team_id }}" class="pb-5 text-3xl font-audiowide tracking-tight text-black hover:text-{{ $driver->colour }}">{{ $driver->team }}</a>
                      <img src="{{ $driver->driver_number }}" class="pb-5 pt-2 justify-self-start max-h-20">
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Age: </strong>{{ $driver->age }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> F1 debut: </strong>{{ $driver->debut }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Best Season: </strong>{{ $driver->best }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Podiums: </strong>{{ $driver->podiums }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Career Points: </strong>{{ $driver->cpoints }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Season Points: </strong>{{ $driver->spoints }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> World Drivers Championships: </strong>{{ $driver->wdc }}</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 border-r-2 border-{{ $driver->colour }} lg:pb-0 lg:pr-8 lg:pt-6 max-h-[380px] overflow-y-scroll [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-white [&::-webkit-scrollbar-thumb]:bg-{{ $driver->colour }} dark:[&::-webkit-scrollbar-track]:bg-white dark:[&::-webkit-scrollbar-thumb]:bg-{{ $driver->colour }}">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 whitespace-pre-line">{{ $driver->bio }}</p>
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
