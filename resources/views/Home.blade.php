
<x-Layout>
  <x-slot:heading>
    Formula One
  </x-slot:heading>
  <x-slot:video>
    <div class="relative">
      <div class="grid h-screen object-center overflow-hidden content-center bg-black">
        <video class="w-screen" autoplay loop muted>
          <source
            src="{{ asset('videos/f1homevid.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="absolute inset-0 bg-gradient-to-r from-black via-black via-15% to-transparent opacity-85 group">
        <h3 class="absolute text-white opacity-0 group-hover:opacity-100 duration-[2100ms] text-8xl z-50 bottom-[560px] left-[90px]">A SPORT</h3>
        <h3 class="absolute text-white opacity-0 group-hover:opacity-100 duration-[2100ms] text-8xl z-50 bottom-[480px] left-[90px]">LIKE NO</h3>
        <h3 class="absolute text-white opacity-0 group-hover:opacity-100 duration-[2100ms] text-8xl z-50 bottom-[400px] left-[90px]">OTHER</h3>
        <h3 class="absolute text-white opacity-0 group-hover:opacity-100 duration-[2100ms] text-xl z-50 bottom-[375px] left-[96px]">Welcome to F1</h3>
      </div>
    </div>
  </x-slot:video>
        <!-- 1st set, sport -->
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
          <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
              <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                  <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
          </div>
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                  <p class="text-base font-semibold leading-7 text-red-600 md:italic">F1</p>
                  <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">The Sport</h1>
                  <p class="mt-6 text-xl leading-8 text-gray-700"> F1 is the most exciting sport to watch. The on track battles and off track dilemas create the excitement all F1 fans are fond of. The scenes are unlike any others in any sport; The excitement when your driver overtakes their rival, the silence when theres a huge crash and the screaming engines of the cars, no other sport communicates with it's fans as much as ours.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://static.independent.co.uk/2024/03/04/14/GettyImages-1388042845.jpg?width=1200&height=1200&fit=crop" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p> Wether you're already a fan of F1 or you're looking for the thrill that only this sport offers, this website is perfect for all of this seasons information to reel you into the action.</p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                        <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2" >
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Drag Reduction System:</strong> The DRS allows drivers to achieve higher speeds by opening the rear wing and allowing more air through which reduces drag. Drivers can use this system on certain straights when they are within 1 second of the car in front. If the DRS were to fail and not open it could cost the driver the chance of overtaking and maybe even the whole grand prix. If it failed and didnt close in time, it could be dangerous for the driver and cause them to crash (2018 marcus ericsson @Monza). </span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 7h11a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-11a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2" />  <line x1="7" y1="10" x2="7" y2="14" />  <line x1="10" y1="10" x2="10" y2="14" />  <line x1="13" y1="10" x2="13" y2="14" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Energy Recovery System:</strong> Drivers have access to ERS at any point in the race as long as they have enough charge to use it. ERS consists of two main units; The MGU-H, which harvests thermal energy from exhaust fumes & the MGU-K, which harvests kinetic energy from the crankshaft while braking or coasting. Drivers can choose strategically when to activate the system for either attacking or defending.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />  <path d="M10 12l-2 -2.2l.6 -1" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Exclusive:</strong> F1 is the most exclusive sport in the world. It's the only sport of its kind, with the fastest and most innovative racing technology available, it doesnt get more unique. The sport only boasts 24 events throughout the year, compared to the world cup which has 104 games. Only the 20 best drivers in the world can redeem a spot in the sport, solidifying it as the hardest sport to get into.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Danger:</strong> F1 is one of the most dangerous sports in the world. The rocket ships of cars reach speeds of 220 mph on long straights and sustain up to 5g's on high speed corners. The battles on track pose danger to drivers due to the proximity that they race at, and a small impact can send drivers flying into walls (Max Verstappens 51g crash in Silverstone after coliding with hamilton).</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/> <circle cx="12" cy="12" r="9" /> <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" /> <path d="M12 6v2m0 8v2" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Expensive:</strong> F1 is the most expensive sport in the world, with the cars being worth upwards of £15,000,000 and parts like the steering wheel are £50,000. Each team has £135,000,000 to spend a year for upgrading the car to reach its potential. Drivers have huge paychecks ranging from £1,000,000 for the lesser drivers and £55,000,000 for drivers like Lewis Hamilton.</span>
                    </li>
                  </ul>
                  <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                  <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                  <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 2nd set, drivers -->
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
          <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
              <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                  <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
          </div>
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                  <p class="text-base font-semibold leading-7 text-red-600 md:italic">F1</p>
                  <a href="/drivers"><h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 hover:text-red-600 sm:text-4xl">The Drivers</h1></a>
                  <p class="mt-6 text-xl leading-8 text-gray-700"> The 20 best drivers in the world line up on the starting line only 24 times a year and prove why they have a seat in the sport.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://menshealth.com.au/wp-content/uploads/2024/02/428486507_682479900763572_2389224458931488982_n.jpg" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p></p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                        <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2" >
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Drag Reduction System:</strong> The DRS allows drivers to achieve higher speeds by opening the rear wing and allowing more air through which reduces drag. Drivers can use this system on certain straights when they are within 1 second of the car in front. If the DRS were to fail and not open it could cost the driver the chance of overtaking and maybe even the whole grand prix. If it failed and didnt close in time, it could be dangerous for the driver and cause them to crash (2018 marcus ericsson @Monza). </span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 7h11a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-11a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2" />  <line x1="7" y1="10" x2="7" y2="14" />  <line x1="10" y1="10" x2="10" y2="14" />  <line x1="13" y1="10" x2="13" y2="14" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Energy Recovery System:</strong> Drivers have access to ERS at any point in the race as long as they have enough charge to use it. ERS consists of two main units; The MGU-H, which harvests thermal energy from exhaust fumes & the MGU-K, which harvests kinetic energy from the crankshaft while braking or coasting. Drivers can choose strategically when to activate the system for either attacking or defending.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />  <path d="M10 12l-2 -2.2l.6 -1" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Exclusive:</strong> F1 is the most exclusive sport in the world. It's the only sport of its kind, with the fastest and most innovative racing technology available, it doesnt get more unique. The sport only boasts 24 events throughout the year, compared to the world cup which has 104 games. Only the 20 best drivers in the world can redeem a spot in the sport, solidifying it as the hardest sport to get into.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Danger:</strong> F1 is one of the most dangerous sports in the world. The rocket ships of cars reach speeds of 220 mph on long straights and sustain up to 5g's on high speed corners. The battles on track pose danger to drivers due to the proximity that they race at, and a small impact can send drivers flying into walls (Max Verstappens 51g crash in Silverstone after coliding with hamilton).</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 6v2m0 8v2" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Expensive:</strong> F1 is the most expensive sport in the world, with the cars being worth upwards of £15,000,000 and parts like the steering wheel are £50,000. Each team has £135,000,000 to spend a year for upgrading the car to reach its potential. Drivers have huge paychecks ranging from £1,000,000 for the lesser drivers and £55,000,000 for drivers like Lewis Hamilton.</span>
                    </li>
                  </ul>
                  <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                  <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                  <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 3rd set, teams-->
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
          <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
              <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                  <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
          </div>
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                  <p class="text-base font-semibold leading-7 text-red-600 md:italic">F1</p>
                  <a href="/teams"><h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 hover:text-red-600 sm:text-4xl">The Teams</h1></a>
                  <p class="mt-6 text-xl leading-8 text-gray-700"> 10 teams battle on the field for championships every year, attempting to hire the best drivers and engineers possible.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://i.redd.it/7f0p24jxcsa91.jpg" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p></p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 21 21 6 18 3 3 18 6 21" />  <line x1="15" y1="6" x2="18" y2="9" />  <path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />  <path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Magic:</strong> Formula 1 engineers, like Adrian Newey, are seen as magicians of the sport due to their ability to push the limits of technology and innovation under strict regulations. Their work involves mastering aerodynamics, materials science, and computational fluid dynamics to create cars capable of incredible speed and precision. Unlike other sports, where physical skill often prevails, F1 is driven by the intellectual prowess of engineers who constantly invent new solutions that give teams a competitive edge. Their dazzling intellect makes F1 not just a race of drivers but a battle of engineering brilliance.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 7h11a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-11a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2" />  <line x1="7" y1="10" x2="7" y2="14" />  <line x1="10" y1="10" x2="10" y2="14" />  <line x1="13" y1="10" x2="13" y2="14" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Strategy:</strong> Drivers have access to ERS at any point in the race as long as they have enough charge to use it. ERS consists of two main units; The MGU-H, which harvests thermal energy from exhaust fumes & the MGU-K, which harvests kinetic energy from the crankshaft while braking or coasting. Drivers can choose strategically when to activate the system for either attacking or defending.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />  <path d="M10 12l-2 -2.2l.6 -1" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Pit Stops:</strong> F1 is the most exclusive sport in the world. It's the only sport of its kind, with the fastest and most innovative racing technology available, it doesnt get more unique. The sport only boasts 24 events throughout the year, compared to the world cup which has 104 games. Only the 20 best drivers in the world can redeem a spot in the sport, solidifying it as the hardest sport to get into.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Roles:</strong> F1 is one of the most dangerous sports in the world. The rocket ships of cars reach speeds of 220 mph on long straights and sustain up to 5g's on high speed corners. The battles on track pose danger to drivers due to the proximity that they race at, and a small impact can send drivers flying into walls (Max Verstappens 51g crash in Silverstone after coliding with hamilton).</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/> <circle cx="12" cy="12" r="9" /> <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" /> <path d="M12 6v2m0 8v2" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Teamwork:</strong> F1 is the most expensive sport in the world, with the cars being worth upwards of £15,000,000 and parts like the steering wheel are £50,000. Each team has £135,000,000 to spend a year for upgrading the car to reach its potential. Drivers have huge paychecks ranging from £1,000,000 for the lesser drivers and £55,000,000 for drivers like Lewis Hamilton.</span>
                    </li>
                  </ul>
                  <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                  <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                  <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
</x-Layout>