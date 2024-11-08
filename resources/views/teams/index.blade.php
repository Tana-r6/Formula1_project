<x-Layout>
  <x-slot:heading>
    Teams
  </x-slot:heading>
  <x-slot:video>
  </x-slot:video>

  <div class="bg-white pb-20">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-3 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only"></h2>

      <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 xl:gap-x-8">
        @foreach($teams as $team)
          <a href="/teams/{{ $team['id']}}" class="group relative">
            <div class="pb-20">
              <div class="ml-[6px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[586px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-{{ $team->colour }}">
                <img src="{{ $team->car_pic }}" alt="{{ $team->team_name }}" class="h-full w-[462px] mx-auto object-cover object-center relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
              </div>
              <div class="grid grid-cols-3 max-h-[70px] min-w-[570px] max-w-[584px] absolute top-[{{ $team->size }}px] border-l-2 border-t-2 border-black group-hover:border-{{ $team->colour }} rounded-tl-lg">
                <div class="col-span-2">  
                  <h3 class="pt-4 pl-2 text-sm group-hover:text-lg group-hover:font-medium text-gray-900 group-hover:text-{{ $team->colour }} duration-300 ease-in-out">{{ $team->team_name }}</h3>
                  <p class="mt-1 pl-2 text-lg font-medium group-hover:text-sm group-hover:font-normal text-gray-900 group-hover:text-{{ $team->colour }} duration-300 ease-in-out">{{ $team->drivers }}</p>
                </div>
                <img src="{{ $team->logo_small }}" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-110">
              </div>
            </div>
          </a>
        @endforeach
        <!-- More products... -->
      </div>
    </div>
  </div>

</x-Layout>