<x-Layout>
  <x-slot:heading>
    Tracks
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>

  <div class="bg-white pb-16">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-3 lg:max-w-7xl lg:px-8">
      <div class="grid gap-x-6 gap-y-6 grid-cols-3">
        @foreach($tracks as $track)
          <a href="/tracks/{{ $track->link_name }}">
            <div class="container mx-auto mt-0">
              <div class="group">
                <div class="text-black w-full relative h-auto overflow-hidden border-b-2 border-gray-400 group-hover:border-{{ $track->colour }} pb-5">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 rounded-xl">  
                    <img src="{{ $track->picture }}" alt="Abu Dhabi" class="object-cover object-center w-full h-auto relative z-0 transition-all duration-500 group-hover:scale-110">
                  </div>
                </div>
                <div class="grid grid-cols-5 pt-4">
                  <div class="items-center col-span-2">
                    <h3 class="mx-2 text-md group-hover:text-xl group-hover:font-medium text-gray-600 group-hover:text-{{ $track->colour }} duration-300 ease-in-out">{{ $track->country }}</h3>
                    <p class="mx-2 text-xl font-medium group-hover:text-sm group-hover:font-normal text-gray-600 group-hover:text-{{ $track->colour }} duration-300 ease-in-out">{{ $track->city }}</p>
                  </div>
                  <img src="{{ $track->layout }}" class="col-start-3 rounded-lg">
                  <img src="{{ $track->flag }}" class="mx-2 col-start-4 col-span-2 justify-self-end rounded-lg border-2 max-h-11">
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>


</x-Layout>