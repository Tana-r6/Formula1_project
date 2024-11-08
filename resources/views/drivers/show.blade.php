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
                    <div class="lg:col-span-2 lg:border-r-2 lg:border-{{ $driver->colour }} lg:pr-8 grid grid-cols-2 grid-rows-1">
                        <img src="" alt="flag" class="rounded-lg border-2 border-grey-700 max-h-10">
                        <h1 class="text-2xl font-audiowide tracking-tight text-gray-900 sm:text-3xl justify-self-end">{{ $driver->name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                      <a href="/" class="text-3xl font-audiowide tracking-tight text-black pb-5 hover:text-{{ $driver->colour }}">Team</a>
                      <p class="text-3xl font-audiowide tracking-tight text-black pt-5 pb-5">Number</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Age: </strong>1</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> F1 debut: </strong>2</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Best Season: </strong>3</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Podiums: </strong>4</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Career Points: </strong>5</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> Season Points: </strong>6</p>
                      <p class="text-xl tracking-tight text-black pb-5"><strong class="font-audiowide font-light"> World Drivers Championships: </strong>7</p>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r-2 lg:border-{{ $driver->colour }} lg:pb-0 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 whitespace-pre-line">‘Still I Rise’ – these are the words emblazoned across the back of Lewis Hamilton’s helmet and tattooed across his shoulders, and ever since annihilating expectations with one of the greatest rookie performances in F1 history in 2007, that’s literally all he’s done: risen to the top of the all-time pole positions list ahead of his hero Ayrton Senna, surged into first place in the wins column surpassing the inimitable Michael Schumacher, and then matched the legendary German’s seven world titles.

                                    Is he the G.O.A.T? Few would deny that he’s in the conversation – and what’s more he’s got there his way, twinning his relentless speed with a refusal to conform to stereotypes for how a racing driver should think, dress or behave.
                                    
                                    Respect is hard earned in F1, but Hamilton – Sir Lewis Hamilton to be precise – has it from every one of his peers. Why? Because they know that whatever the track, whatever the conditions, whatever the situation, when his visor goes down and the lights go out, it’s Hammertime.</p>
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
