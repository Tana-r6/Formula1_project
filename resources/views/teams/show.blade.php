<x-layout>
  <x-slot:heading>
    {{ $team->team_name }}
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>
        <div class="bg-white">
            <div class="pt-6">
                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-7xl px-6 pb-8 grid grid-cols-3 gap-6 border-b-2 border-{{ $team->colour }}">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block self-center max-h-96">
                        <img src="{{ $team->pic1 }}">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="{{ $team->pic2 }}">
                    </div>
                    <div class="overflow-hidden rounded-lg col-span-2 max-h-96">
                        <img src="{{ $team->pic3 }}">
                    </div>
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block max-h-96">
                        <img src="{{ $team->pic4 }}">
                    </div>
                </div>

                <!-- Product info -->
                <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8">
                    <div class="pb-6 lg:col-span-2 border-r-2 border-{{ $team->colour }} lg:pr-8 grid grid-cols-8 grid-rows-1">
                        <img src="{{ $team->d1flag }}" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <a href="/drivers/{{ $team->d1id }}" class="text-3xl font-audiowide tracking-tight text-gray-900 sm:text-3xl col-span-3 hover:text-{{ $team->colour }}">{{ $team->driver1 }}</a>
                        <a href="/drivers/{{ $team->d2id }}" class="text-3xl font-audiowide tracking-tight text-gray-900 sm:text-3xl justify-self-end col-span-3 hover:text-{{ $team->colour }}">{{ $team->driver2 }}</a>
                        <img src="{{ $team->d2flag }}" class="rounded-lg border-2 border-grey-700 max-h-10 justify-self-end">
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <div class="grid grid-cols-5">
                        <img src="{{ $team->flag}}" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <p class="text-3xl font-audiowide tracking-tight text-black pb-5 justify-self-start col-span-4">{{ $team->team_name }}</p>
                        <p class="text-xl font-audiowide tracking-tight text-black col-span-3 flex items-center">{{ $team->full }}</p>
                        <img src="{{ $team->complogo }}" class="rounded-lg max-h-20 col-span-2 justify-self-end">
                      </div>
                      <p class="text-xl tracking-tight text-black pt-2 pb-5"><strong class="font-audiowide font-light">First Team Entry: </strong>{{ $team->entry }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Base Location: </strong>{{ $team->base }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Chassis: </strong>{{ $team->chassis }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Team Principal: </strong>{{ $team->principal }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Power Unit: </strong>{{ $team->powerunit }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Best Season: </strong>{{ $team->best }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Season Points: </strong>{{ $team->spoints }}</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light">Constructors Championships: </strong>{{ $team->wcc }}</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 border-r-2 border-{{ $team->colour }} lg:pb-0 lg:pr-8 lg:pt-6 max-h-[455px] overflow-y-scroll [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-white [&::-webkit-scrollbar-thumb]:bg-{{ $team->colour }} dark:[&::-webkit-scrollbar-track]:bg-white dark:[&::-webkit-scrollbar-thumb]:bg-{{ $team->colour }}">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 whitespace-pre-line">{!! $team->bio !!}</p>
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