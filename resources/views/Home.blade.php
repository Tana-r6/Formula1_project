
<x-Layout>
  <x-slot:heading>
    Formula One
  </x-slot:heading>
  <x-slot:video>
      <div class="grid h-screen object-center overflow-hidden content-center bg-black">
        <video class="w-screen" autoplay loop muted>
          <source
            src="{{ asset('videos/f1homevid.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="absolute inset-0 group">
        <h3 class="absolute font-audiowide text-white opacity-0 group-hover:opacity-100 duration-[2100ms] delay-[500ms] text-8xl z-50 bottom-[560px] left-[90px]">A SPORT</h3>
        <h3 class="absolute font-audiowide text-white opacity-0 group-hover:opacity-100 duration-[2100ms] delay-[500ms] text-8xl z-50 bottom-[480px] left-[90px]">LIKE NO</h3>
        <h3 class="absolute font-audiowide text-white opacity-0 group-hover:opacity-100 duration-[2100ms] delay-[500ms] text-8xl z-50 bottom-[400px] left-[90px]">OTHER</h3>
        <h3 class="absolute font-audiowide text-white opacity-0 group-hover:opacity-100 duration-[2100ms] delay-[500ms] text-xl z-50 bottom-[375px] left-[96px]">Welcome to F1</h3>
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
                  <p class="text-base font-semibold font-audiowide leading-7 text-red-600 md:italic">F1</p>
                  <h1 class="mt-2 text-3xl font-audiowide tracking-tight text-black">The Sport</h1>
                  <p class="mt-6 text-xl leading-8 text-black"> F1 is the most exciting sport to watch. The on track battles and off track dilemas create the excitement all F1 fans are fond of. The scenes are unlike any others in any sport; The excitement when your driver overtakes their rival, the silence when theres a huge crash and the screaming engines of the cars, no other sport communicates with it's fans as much as ours.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-black shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://static.independent.co.uk/2024/03/04/14/GettyImages-1388042845.jpg?width=1200&height=1200&fit=crop" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-800 lg:max-w-lg">
                  <p> Wether you're already a fan of F1 or you're looking for the thrill that only this sport offers, this website is perfect for all of this seasons information to reel you into the action.</p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                        <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2" >
                      </svg>
                      <span><strong class="font-audiowide text-black">Drag Reduction System: </strong>The DRS allows drivers to achieve higher speeds by opening the rear wing and allowing more air through which reduces drag. Drivers can use this system on certain straights when they are within 1 second of the car in front. If the DRS were to fail and not open it could cost the driver the chance of overtaking and maybe even the whole grand prix. If it failed and didnt close in time, it could be dangerous for the driver and cause them to crash (2018 marcus ericsson @Monza). </span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 7h11a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-11a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2" />  <line x1="7" y1="10" x2="7" y2="14" />  <line x1="10" y1="10" x2="10" y2="14" />  <line x1="13" y1="10" x2="13" y2="14" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Energy Recovery System: </strong>Drivers have access to ERS at any point in the race as long as they have enough charge to use it. ERS consists of two main units; The MGU-H, which harvests thermal energy from exhaust fumes & the MGU-K, which harvests kinetic energy from the crankshaft while braking or coasting. Drivers can choose strategically when to activate the system for either attacking or defending.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />  <path d="M10 12l-2 -2.2l.6 -1" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Exclusive: </strong>F1 is the most exclusive sport in the world. It's the only sport of its kind, with the fastest and most innovative racing technology available, it doesnt get more unique. The sport only boasts 24 events throughout the year, compared to the world cup which has 104 games. Only the 20 best drivers in the world can redeem a spot in the sport, solidifying it as the hardest sport to get into.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Danger: </strong>F1 is one of the most dangerous sports in the world. The rocket ships of cars reach speeds of 220 mph on long straights and sustain up to 5g's on high speed corners. The battles on track pose danger to drivers due to the proximity that they race at, and a small impact can send drivers flying into walls (Max Verstappens 51g crash in Silverstone after coliding with hamilton).</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/> <circle cx="12" cy="12" r="9" /> <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" /> <path d="M12 6v2m0 8v2" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Expensive: </strong>F1 is the most expensive sport in the world, with the cars being worth upwards of £15,000,000 and parts like the steering wheel are £50,000. Each team has £135,000,000 to spend a year for upgrading the car to reach its potential. Drivers have huge paychecks ranging from £1,000,000 for the lesser drivers and £55,000,000 for drivers like Lewis Hamilton.</span>
                    </li>
                  </ul>
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
                  <p class="text-base font-audiowide leading-7 text-red-600 md:italic">F1</p>
                  <a href="/drivers"><h1 class="mt-2 text-3xl font-audiowide tracking-tight text-black hover:text-red-600 sm:text-4xl">The Drivers</h1></a>
                  <p class="mt-6 text-xl leading-8 text-black"> The 20 best drivers in the world line up on the starting grid only 24 times a year and prove why they have a seat in the sport.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-black shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://menshealth.com.au/wp-content/uploads/2024/02/428486507_682479900763572_2389224458931488982_n.jpg" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p></p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15a6 6 0 1 1 -10.853 -3.529c1.926-2.338 4.763-3.327 3.848-8.47 2.355 1.761 5.84 5.38 2.022 9.406-1.136 1.091-.244 2.767 1.221 2.593.882-.105 2.023-.966 3.23-2.3.532.68.532 1.717.532 2.3z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Fearless: </strong>The drivers weren't taught the word fear; if they had been, they wouldn't be as good as they are. They navigate speeds exceeding 200 mph, making split-second decisions while facing the constant threat of danger. The precision required to control a car at such speeds, coupled with the physical and mental demands of the sport, showcases a remarkable lack of fear. F1 drivers thrive on overcoming the extreme risks they face, driven by an unshakable determination to compete at the highest level.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                      </svg>
                      <span><strong class="font-audiowide text-black">Reactions: </strong>In Formula 1, drivers must react with incredible speed and precision, often within milliseconds. Their ability to process and respond to rapidly changing situations—such as overtaking, braking, or avoiding crashes—can make the difference between winning and losing a race, or even avoiding serious accidents. Every moment demands razor-sharp focus, as drivers anticipate track conditions, other cars, and mechanical responses. The importance of their reactions extends beyond the race itself, as their split-second decisions can have a profound impact on both their safety and their team’s performance.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Fitness: </strong>Formula 1 drivers are required to be in peak physical condition, as the sport demands both mental and physical endurance. The intense G-forces experienced during high-speed cornering, combined with the heat inside the cockpit puts immense strain on the body. Drivers must maintain exceptional cardiovascular fitness to endure long, physically taxing races, as well as muscular strength and endurance to control the car through sharp turns and sudden braking. Additionally, mental fitness is crucial, as they must stay focused and sharp for hours at a time, making quick decisions under extreme pressure. The physical demands of F1 push drivers to train rigorously year-round, ensuring they are always prepared for the challenges of the track.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />  <polyline points="12 6 12 12 16 14" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Composure: </strong>F1 drivers must remain exceptionally composed, even in the most high-pressure situations. With split-second decisions that can impact the outcome of a race, staying calm is essential. Whether navigating tight corners at high speeds, dealing with aggressive competitors, or managing unexpected car issues, maintaining mental clarity is crucial. The ability to block out distractions, control emotions, and think strategically allows drivers to focus on the task at hand. Their composure helps them stay consistent throughout the race, adapt to changing conditions, and avoid mistakes that could cost them valuable time or even their safety. In Formula 1, composure is often the key to success.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />  <polyline points="17 6 23 6 23 12" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Determination: </strong>Determination is at the core of every Formula 1 driver’s mindset. From the start of their career in karting, hoping for a seat in the higher leagues. To the relentless pursuit of perfection, even in the face of setbacks, defines their approach to racing. Whether recovering from a crash, adapting to a new track, or overcoming mechanical failures, F1 drivers display an unwavering commitment to pushing their limits. Their dedication to constant improvement, both on and off the track, drives them to train tirelessly, refine their skills, and maintain focus under extreme pressure. This determination is what fuels their ability to perform at the highest level, where every fraction of a second counts and the margin for error is razor-thin.</span>
                    </li>
                  </ul>
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
                  <p class="text-base font-audiowide leading-7 text-red-600 md:italic">F1</p>
                  <a href="/teams"><h1 class="mt-2 text-3xl font-audiowide tracking-tight text-black hover:text-red-600 sm:text-4xl">The Teams</h1></a>
                  <p class="mt-6 text-xl leading-8 text-black"> 10 teams battle on the field for championships every year, attempting to hire the best drivers and engineers possible.</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-black shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://i.redd.it/7f0p24jxcsa91.jpg" alt="">
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
                      <span><strong class="font-audiowide text-black">Magic: </strong>Formula 1 engineers, like Adrian Newey, are seen as magicians of the sport due to their ability to push the limits of technology and innovation under strict regulations. Their work involves mastering aerodynamics, materials science, and computational fluid dynamics to create cars capable of incredible speed and precision. Unlike other sports, where physical skill often prevails, F1 is driven by the intellectual prowess of engineers who constantly invent new solutions that give teams a competitive edge. Their dazzling intellect makes F1 not just a race of drivers but a battle of engineering brilliance.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Strategy: </strong>Strategy plays a crucial role in Formula 1, as it can be the deciding factor between winning and losing a race. Teams must carefully plan pit stops, tire choices, fuel loads, and race pace based on a variety of factors, including weather, track conditions, and the behavior of competitors. A well-executed strategy allows drivers to optimize their performance, manage tire wear, and make the most of their car’s strengths. At the same time, being able to adapt quickly to changing circumstances - such as unexpected safety cars or accidents - demands flexibility and quick thinking. The interplay between driver skill and strategic decisions is what makes F1 a dynamic and unpredictable sport.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Pit Stops: </strong>Quick pit stops are vital in Formula 1, as they can make or break a race. Every second spent in the pit lane is crucial, and even the smallest delay can cost valuable positions on the track. A fast and efficient pit stop allows a driver to return to the race with minimal time lost, keeping them in the competitive mix. Pit crews work in perfect synchronization to change tires, adjust settings, or address car issues, aiming for a seamless transition that maximizes performance. In races where margins are razor-thin, a quick pit stop can be the difference between securing a podium finish or losing out to a rival.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                      </svg>
                      <span><strong class="font-audiowide text-black">Teamwork: </strong>Teamwork is absolutely essential in Formula 1, as success on the track is rarely achieved by a single individual. While the driver may be the most visible figure, the entire team plays a crucial role in ensuring the car is race-ready and that strategies are executed flawlessly. From engineers designing and fine-tuning the car, to the pit crew executing lightning-fast tire changes, every member of the team must work in perfect coordination. Effective communication between the driver, race engineers, strategists, and mechanics ensures that decisions are made quickly and accurately, allowing the team to adapt to changing conditions during the race. In a sport where milliseconds matter, the ability to work together, trust one another, and execute under pressure is what often separates winners from the rest of the pack.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/> <circle cx="12" cy="12" r="9" /> <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" /> <path d="M12 6v2m0 8v2" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Costs: </strong>Managing costs is a critical aspect of success in Formula 1, where teams operate with limited budgets and must maximize the efficiency of their resources. Every element of an F1 team’s operation—from car development, equipment, and travel expenses, to staff salaries and research—must be carefully managed to stay within financial constraints. Teams must make strategic decisions about where to allocate resources, often prioritizing key areas such as car performance and technology upgrades, while finding ways to cut costs in other areas, like logistics and non-essential staff. The introduction of cost caps in recent years has further emphasized the importance of financial management, as teams now must balance innovation with budget restrictions. Properly managing costs ensures that a team remains competitive while also achieving long-term financial sustainability in a sport where the margins between success and failure are razor-thin.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <p class="text-base font-audiowide leading-7 text-red-600 md:italic">F1</p>
                  <a href="/teams"><h1 class="mt-2 text-3xl font-audiowide tracking-tight text-black hover:text-red-600 sm:text-4xl">Roles</h1></a>
                  <p class="mt-6 text-xl leading-8 text-black">Formula 1 is a highly collaborative sport, with many different roles working together to ensure the success of the team. Each team has hundreds of members and understanding the roles can make f1 easier to understand and more entertaining to watch. Here are some of the key roles in F1:</p>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 px-10 pb-4 pt-20 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl bg-black shadow-lg ring-1 ring-gray-400/10 sm:w-[45rem]" src="https://static.independent.co.uk/2024/01/15/09/GettyImages-1809483942%20%281%29.jpg?width=1200&height=1200&fit=crop" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p></p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Driver: </strong>The driver is the focal point of the team, representing the culmination of all the hard work, strategy, and preparation. Their skill behind the wheel directly impacts the outcome of the race. A driver must have exceptional reflexes, focus, and the ability to make split-second decisions under extreme pressure. Their feedback on car performance is invaluable for engineers to make adjustments, and their execution of race strategies is critical to maximizing the team’s potential on the track. In a sport where every millisecond counts, the driver’s talent and adaptability can make all the difference.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Team Principal: </strong>The team principal is the leader of the entire operation, overseeing all aspects of the team’s functioning both on and off the track. They are responsible for making high-level decisions regarding team strategy, finances, and personnel. The team principal must be an excellent communicator, motivating the team, managing expectations, and making quick, informed decisions in high-stress environments. Their leadership ensures that everyone works toward the same goals, from race performance to long-term team success. Ultimately, the team principal plays a significant role in shaping the team’s culture and determining its competitive edge.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="13" rx="2" width="4" height="6" />  <rect x="16" y="13" rx="2" width="4" height="6" />  <path d="M4 15v-3a8 8 0 0 1 16 0v3" />  <path d="M18 19a6 3 0 0 1 -6 3" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Race Engineer: </strong>The race engineer is responsible for the real-time technical communication between the driver and the rest of the team during a race. They monitor the car’s performance, adjust settings, and optimize strategy throughout the race. Their role is crucial for maintaining the car’s optimal performance based on the driver’s feedback and the race situation. In many ways, the race engineer is the driver’s most important ally in making decisions that affect tire management, fuel usage, and timing of pit stops. Their expertise in the car’s systems and strategic thinking can be the key to gaining positions on the track or securing a podium finish.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Pit Crew: </strong>The pit crew’s efficiency is absolutely vital to a successful race. They are responsible for executing lightning-fast pit stops, including tire changes, fueling, and making necessary adjustments to the car. A slow or error-prone pit stop can cost a team valuable time and potentially positions in the race, so the pit crew must work in perfect synchronization under intense pressure. They must anticipate the driver's needs and respond quickly to race conditions, executing everything within a few seconds. The pit crew’s expertise and precision can often be the difference between a win and a lost opportunity.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3" />  <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Mechanics: </strong>The mechanics are responsible for ensuring the car is in peak condition before, during, and after each race. They assemble the car, maintain its systems, and make necessary repairs between races. Their work is fundamental to a team's performance, as a car must be mechanically flawless to withstand the demands of an F1 race. Mechanics perform detailed inspections and ensure the car is fully operational, addressing any issues that could potentially affect performance or safety. A well-maintained car gives the driver the best chance to perform at their highest level, and the mechanics play a huge part in achieving that.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                      </svg>
                      <span><strong class="font-audiowide text-black">Strategist: </strong>The strategist plays a key role in determining the race plan, including when to pit, which tire compounds to use, and how to respond to changing conditions during the race. Their decisions are based on a combination of data, historical race trends, weather conditions, and real-time information. The strategist works closely with the race engineer and driver to adapt to the evolving race situation, ensuring that the team maximizes its position and minimizes risk. The strategist’s ability to think several steps ahead is crucial to executing a successful race plan, especially when unexpected events—such as safety cars or weather changes—disrupt the race.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                      </svg>
                      <span><strong class="font-audiowide text-black">Data Analysts: </strong>Data analysts collect and interpret vast amounts of information from the car during practice, qualifying, and the race. This data includes telemetry, tire performance, engine data, and other vital statistics that help the team fine-tune the car and develop strategies. Their analysis allows the team to make informed decisions about car setup, pit stops, and race tactics. The accuracy and speed with which they process and communicate this data can have a direct impact on a team’s race performance, ensuring that the car operates at its optimal level and that the team remains competitive throughout the weekend.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Aerodynamicists: </strong>Aerodynamicists are responsible for improving the car’s aerodynamics, which has a direct effect on speed, handling, and efficiency. By analyzing airflow and making adjustments to the car’s design, they aim to reduce drag and maximize downforce, which enhances the car's grip and stability. Their work often involves wind tunnel testing and computational fluid dynamics simulations to identify areas where performance can be improved. In F1, aerodynamics are critical for a car’s performance, and the aerodynamicists’ expertise ensures that the car is as fast and efficient as possible on the track.<span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />  <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />  <circle cx="12" cy="7.5" r=".5" fill="currentColor" />  <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                      </svg>
                      <span><strong class="font-audiowide text-black">Chief Designer: </strong>The chief designer is responsible for the overall design of the car, ensuring that it meets technical regulations and performs at the highest level. They lead a team of engineers and designers to innovate and develop the car’s components, from the chassis to the suspension, ensuring the car is both fast and reliable. The chief designer must balance performance with safety and efficiency, working to create a car that can withstand the physical demands of a race while achieving the best possible speed and handling. Their vision and technical expertise are fundamental to the car’s overall success on the track.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                      </svg>
                      <span><strong class="font-audiowide text-black">Marketing and PR: </strong>The marketing and PR team is crucial in shaping the public image of the team, managing relationships with sponsors, the media, and fans. They create campaigns that build brand awareness, promote the team’s achievements, and engage with the wider audience. Sponsorships are a key source of funding for F1 teams, and the PR team works to maintain strong relationships with sponsors and partners. Additionally, they handle crisis communication and manage the team's image during both successes and setbacks. The marketing team ensures that the team maintains visibility and popularity, contributing to long-term success both financially and reputationally.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
</x-Layout>