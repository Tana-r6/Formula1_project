<x-Layout>
  <x-slot:heading>
    Tracks
  </x-slot:heading>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-3 lg:max-w-7xl lg:px-8">
    <div class="grid gap-x-6 gap-y-6 grid-cols-4">
      <div>
        <!-- Product Section -->
        <div class="container mx-auto mt-0">
          <div class="">
            <button id="quickViewBtn" class="mt-4 text-black w-full relative h-auto overflow-hidden rounded-tl-lg">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 border-r-2 border-b-2 rounded-br-xl border-black hover:border-sky-300">
                <img src="https://nationaltoday.com/wp-content/uploads/2021/06/Italian-Republic-Day.jpg" alt="Alex Albon" class="object-cover object-center w-full h-auto relative z-0 transition-all duration-300 hover:scale-110">
              </div>
            </button>
            <h3 class="mt-4 text-sm text-black">Italy</h3>
            <p class="mt-1 text-lg font-medium text-black">Imola & Monza</p>
          </div>
        </div>

        <!-- Quick View Modal -->
        <div id="quickViewModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-10">
          <div class="bg-white p-8 rounded-lg shadow-lg max-w-[900px] w-full">
            <div class="grid grid-cols-2 gap-x-6">
              <h2 class="text-2xl font-bold mb-4 col-span-2 flex justify-center">Italy</h2>
              <div class="w-full relative h-[405px] overflow-hidden rounded-lg">  
                <a href="/imola"> 
                  <img src="https://s3.travel-cdn.net/pictures/145211/feed_newsletter_square.jpg?rev=1" alt="Product Image" class="w-full h-auto relative z-0 rounded-lg scale-110 transition-all duration-300 hover:scale-100">
                </a>
              </div>
              <div class="w-full relative h-[405px] overflow-hidden rounded-lg">
                <a href="/monza">
                  <img src="https://img.bleacherreport.net/img/images/photos/003/515/627/hi-res-93c7aceaf1e52cb138c7440a70ece743_crop_exact.jpg?w=1200&h=1200&q=75" alt="Product Image" class="w-full h-auto relative z-0 rounded-lg scale-110 transition-all duration-300 hover:scale-100">
                </a>
              </div>
              <p class="text-lg font-semibold mb-4 flex justify-center">Emilia-Romagna</p>
              <p class="text-lg font-semibold mb-4 flex justify-center">Monza</p>
            </div>
            <button id="closeModalBtn" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded hidden">
              Close
            </button>
          </div>
        </div>

          <!-- JavaScript -->
        <script>
          const quickViewBtn = document.getElementById('quickViewBtn');
          const quickViewModal = document.getElementById('quickViewModal');
          const closeModalBtn = document.getElementById('closeModalBtn');

          // Show modal when Quick View button is clicked
            quickViewBtn.addEventListener('click', () => {
            quickViewModal.classList.remove('hidden');
            quickViewModal.classList.add('flex');
          });

          // Hide modal when Close button is clicked
            closeModalBtn.addEventListener('click', () => {
            quickViewModal.classList.remove('flex');
            quickViewModal.classList.add('hidden');
          });

            // Hide modal when clicking outside modal content
              window.addEventListener('click', (e) => {
              if (e.target === quickViewModal) {
              quickViewModal.classList.remove('flex');
              quickViewModal.classList.add('hidden');
            }
          });
        </script>
      </div>

      <div>
        <!-- Product Section -->
        <div class="container mx-auto mt-0">
          <div class="bg-white shadow-md rounded-lg p-4">
            <button id="quickViewBtn1" class="mt-4 text-black w-full relative h-auto overflow-hidden rounded-lg">
              <img src="https://cdn.vox-cdn.com/thumbor/QkWFvdZlBl5SNhwM_1-Gqa8xoDI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16204440/171109_08_33_46_5DS_0660.jpg" class="w-full h-auto relative z-0 rounded-lg transition-all duration-300 hover:scale-110"> 
            </button>
            <h2 class="text-xl font-bold">United States</h2>
            <p class="text-gray-700">Las Vegas, Miami & Austin</p>
          </div>
        </div>

        <!-- Quick View Modal -->
        <div id="quickViewModal1" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
          <div class="bg-white p-8 rounded-lg shadow-lg max-w-[1250px] w-full">
            <div class="grid grid-cols-3 gap-x-6">
              <h2 class="text-2xl font-bold mb-4 col-span-3 flex justify-center">United States of America</h2>
              <img src="https://cdn.vox-cdn.com/thumbor/QkWFvdZlBl5SNhwM_1-Gqa8xoDI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16204440/171109_08_33_46_5DS_0660.jpg" alt="Product Image" class="w-full mb-4">
              <img src="https://cdn.vox-cdn.com/thumbor/QkWFvdZlBl5SNhwM_1-Gqa8xoDI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16204440/171109_08_33_46_5DS_0660.jpg" alt="Product Image" class="w-full mb-4">
              <img src="https://cdn.vox-cdn.com/thumbor/QkWFvdZlBl5SNhwM_1-Gqa8xoDI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16204440/171109_08_33_46_5DS_0660.jpg" alt="Product Image" class="w-full mb-4">
              <p class="text-lg font-semibold mb-4 flex justify-center">Las Vegas</p>
              <p class="text-lg font-semibold mb-4 flex justify-center">Miami</p>
              <p class="text-lg font-semibold mb-4 flex justify-center">Austin</p>
            </div>
            <button id="closeModalBtn1" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded hidden">
              Close
            </button>
          </div>
        </div>

          <!-- JavaScript -->
        <script>
          const quickViewBtn1 = document.getElementById('quickViewBtn1');
          const quickViewModal1 = document.getElementById('quickViewModal1');
          const closeModalBtn1 = document.getElementById('closeModalBtn1');

          // Show modal when Quick View button is clicked
            quickViewBtn1.addEventListener('click', () => {
            quickViewModal1.classList.remove('hidden');
            quickViewModal1.classList.add('flex');
          });

          // Hide modal when Close button is clicked
            closeModalBtn1.addEventListener('click', () => {
            quickViewModal1.classList.remove('flex');
            quickViewModal1.classList.add('hidden');
          });

          // Hide modal when clicking outside modal content
            window.addEventListener('click', (e) => {
            if (e.target === quickViewModal1) {
              quickViewModal1.classList.remove('flex');
              quickViewModal1.classList.add('hidden');
            }
          });
        </script>
      </div>
    </div>
  </div>
</div>  

</body>
</html>

</x-Layout>