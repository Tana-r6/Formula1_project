<x-layout>
  <x-slot:heading>
    {{ $track->city }}
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>
        <div class="bg-white">
            <div class="pt-6">
                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-7xl px-6 pb-8 grid grid-cols-3 gap-6 border-b-2 border-{{ $track->colour }}">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block self-center max-h-96">
                        <img src="{{ $track->pic1 }}">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="{{ $track->pic2 }}">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="{{ $track->pic3 }}">
                    </div>
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block max-h-96">
                        <img src="{{ $track->pic4 }}">
                    </div>
                </div>

                <!-- Product info -->
                <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8">
                    <div class="pb-6 lg:col-span-2 border-r-2 border-{{ $track->colour }} lg:pr-8 grid grid-cols-2 grid-rows-1">
                        <img src="{{ $track->flag }}" alt="flag" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <h1 class="text-2xl font-audiowide tracking-tight text-{{ $track->colour }} sm:text-3xl justify-self-end">{{ $track->country }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <div class="grid grid-cols-4">
                        <p class="text-xl font-bold tracking-tight text-black pb-5 justify-self-start col-span-4 font-audiowide">{{ $track->gpname }}</p>
                        <p class="text-lg tracking-tight text-black pb-5 col-span-4 flex items-center">{{ $track->full }}</p>
                      </div>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">First track Entry: </strong>{{ $track->entry }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Grands Prix held: </strong>{{ $track->gps }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">No. Winners: </strong>{{ $track->winners }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Circuit Length: </strong>{{ $track->length }} km</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Grand Prix Length: </strong>{{ $track->gplength }} km</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Turns: </strong>{{ $track->turns }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Laps: </strong>{{ $track->laps }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Record: </strong>{{ $track->record }}</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 border-r-2 border-{{ $track->colour }} lg:pb-0 lg:pr-8 lg:pt-6 max-h-[460px] overflow-y-scroll [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-white [&::-webkit-scrollbar-thumb]:bg-{{ $track->colour }} dark:[&::-webkit-scrollbar-track]:bg-white dark:[&::-webkit-scrollbar-thumb]:bg-{{ $track->colour }}">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <img src="{{ $track->detailed }}" class="rounded-lg">
                                <p class="text-base text-gray-900 whitespace-pre-line">{!! $track->bio !!}</p>
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