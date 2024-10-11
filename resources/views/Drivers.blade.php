<x-Layout>
  <x-slot:heading>
    Drivers
  </x-slot:heading>
  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
  <div class="bg-white pb-16">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-3 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only"></h2>

      <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="/drivers/alex-albon" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-sky-300">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/A/ALEALB01_Alexander_Albon/alealb01.png" alt="Alex Albon" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-sky-300 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-sky-300">Alex Albon</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-sky-300">Williams</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/ALEALB01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/fernando-alonso" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-emerald-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/F/FERALO01_Fernando_Alonso/feralo01.png" alt="Fernando Alonso" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-emerald-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-emerald-600">Fernando Alonso</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-emerald-600">Aston Martin</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/FERALO01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/valtteri-bottas" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-green-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/V/VALBOT01_Valtteri_Bottas/valbot01.png" alt="Valtteri Bottas" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-green-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-green-400">Valtteri Bottas</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-green-400">Kick Sauber</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/VALBOT01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/pierre-gasly" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-sky-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/P/PIEGAS01_Pierre_Gasly/piegas01.png" alt="Pierre Gasly" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-sky-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-sky-600">Pierre Gasly</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-sky-600">Alpine</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/PIEGAS01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/lewis-hamilton" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-teal-300">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png" alt="Lewis Hamilton" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-teal-300 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-teal-300">Lewis Hamilton</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-teal-300">Mercedes</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/LEWHAM01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/nico-hulkenberg" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-gray-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/N/NICHUL01_Nico_Hulkenberg/nichul01.png" alt="Nico Hulkenberg" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-gray-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-gray-400">Nico Hulkenberg</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-gray-400">Haas</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/NICHUL01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/charles-leclerc" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-red-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png" alt="Charles Leclerc" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-red-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-red-600">Charles Leclerc</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-red-600">Ferrari</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/CHALEC01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/kevin-magnussen" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-gray-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/K/KEVMAG01_Kevin_Magnussen/kevmag01.png" alt="Kevin Magnussen" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-gray-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-gray-400">Kevin Magnussen</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-gray-400">Haas</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/KEVMAG01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/lando-norris" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-orange-500">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png" alt="Lando Norris" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-orange-500 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-orange-500">Lando Norris</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-orange-500">Mclaren</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/LANNOR01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/esteban-ocon" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-sky-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/E/ESTOCO01_Esteban_Ocon/estoco01.png" alt="Estoban Ocon" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-sky-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-sky-600">Esteban Ocon</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-sky-600">Alpine</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/ESTOCO01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/sergio-perez" class="group relative">
        <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-blue-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/S/SERPER01_Sergio_Perez/serper01.png" alt="Sergio Perez" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-blue-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-blue-600">Sergio Perez</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-blue-600">Red Bull</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/SERPER01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/oscar-piastri" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-orange-500">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/O/OSCPIA01_Oscar_Piastri/oscpia01.png" alt="Oscar Piastri" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-orange-500 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-orange-500">Oscar Piastri</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-orange-500">Mclaren</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/OSCPIA01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/daniel-ricciardo" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-blue-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/D/DANRIC01_Daniel_Ricciardo/danric01.png" alt="Daniel Ricciardo" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-blue-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-blue-400">Daniel Ricciardo</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-blue-400">Rb Visa</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/DANRIC01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/george-russell" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-teal-300">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png" alt="George Russell" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-teal-300 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-teal-300">George Russell</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-teal-300">Mercedes</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/GEORUS01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/carlos-sainz" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-red-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/C/CARSAI01_Carlos_Sainz/carsai01.png" alt="Carlos Sianz" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-red-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-red-600">Carlos Sainz</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-red-600">Ferrari</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/CARSAI01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/logan-sargeant" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-sky-300">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LOGSAR01_Logan_Sargeant/logsar01.png" alt="Logan Sargeant" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-sky-300 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-sky-300">Logan Sargeant</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-sky-300">Williams</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/LOGSAR01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/lance-stroll" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-emerald-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LANSTR01_Lance_Stroll/lanstr01.png" alt="Lance Stroll" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-emerald-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-emerald-600">Lance Stroll</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-emerald-600">Aston Martin</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/LANSTR01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/yuki-tsunoda" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-blue-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/Y/YUKTSU01_Yuki_Tsunoda/yuktsu01.png" alt="Yuki Tsunoda" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-blue-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-blue-400">Yuki Tsunoda</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-blue-400">Rb Visa</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/YUKTSU01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/max-verstappen" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-blue-600">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png" alt="Max Verstappen" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-blue-600 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-blue-600">Max Verstappen</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-blue-600">Red Bull</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/MAXVER01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        <a href="/drivers/guanyu-zhou" class="group relative">
          <div class="pb-20">
            <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-green-400">
              <img src="https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/G/GUAZHO01_Guanyu_Zhou/guazho01.png" alt="Guanyu Zhou" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
            </div>
            <div class="grid grid-cols-2 max-h-[70px] min-w-[275px] absolute top-[273px] border-l-2 border-t-2 border-black group-hover:border-green-400 rounded-tl-lg">
              <div>
                <h3 class="pt-4 pl-2 text-sm text-gray-900 group-hover:text-green-400">Guanyu Zhou</h3>
                <p class="mt-1 pl-2 text-lg font-medium text-gray-900 group-hover:text-green-400">Kick Sauber</p>
              </div>
              <img src="https://media.formula1.com/d_default_fallback_image.png/content/dam/fom-website/2018-redesign-assets/drivers/number-logos/GUAZHO01.png" class="justify-self-end object-cover object-center relative z-0 rounded-lg transition-all duration-700 scale-0 group-hover:scale-75">
            </div>
          </div>
        </a>
        
        <!-- More products... -->
      </div>
    </div>
  </div>

</x-Layout>