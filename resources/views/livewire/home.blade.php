<div class="mx-auto max-w-7xl">
  <div class="space-y-10 pb-10">
    {{-- <Hero> --}} 
    <div class="h-screen flex  items-center">
       <div class="text-center mx-auto" style="background-image: url(../../storage/images/hero.jpg)">
         <h1 class="text-4xl font-semibold"> Entdecken Sie Biomedizin!</h1>
         <p class="font-light text-3xl mt-5">Eine Menge Möglichkeiten</p>
         <a class="px-8 py-2 inline-block bg-slate-100	border border-violet-200  rounded-lg text-violet-950 hover:text-violet-800 font-semibold transition-colors mt-10">Anfagen ></a> 
       </div>
    </div>
    <!-- <div class="p-4 sm:p-6 lg:p-8 rounded-xl overflow-hidden">
      <div class="rounded-xl relative aspect-square md:aspect-[2.4/1] overflow-hidden bg-cover" style="background-image: url(../../storage/images/hero.jpg)">
        <div class="h-full w-full flex flex-col justify-center items-center text-center gap-y-8">
          <div class="font-bold text-3xl sm:text-5xl lg:text-6xl sm:max-w-xl max-w-xs">
            Explore the special collection!
          </div>
        </div>
      </div>
    </div> -->
    {{-- <Categories> --}}


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
<div class="bg-gray-100">
  <div class="mx-auto  px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="#">
              <span class="absolute inset-0"></span>
              Desk and Office
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="#">
              <span class="absolute inset-0"></span>
              Self-Improvement
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="#">
              <span class="absolute inset-0"></span>
              Travel
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
        </div>
      </div>
    </div>
  </div>
</div>




    {{-- </Categories> --}}
    <div class="flex flex-col gap-y-8 px-4 sm:px-6 lg:px-8">
      <div class="space-y-4">
        <h3 class="font-bold text-3xl">Featured Products</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          @foreach ($products as $product )
          <a href="/products/{{$product->slug}}">
            <div class="bg-white group cursor-pointer rounded-xl border p-3 space-y-4">
              <div class="aspect-square rounded-xl bg-gray-100 relative">
                <img src="{{url('storage', $product->images[0])}}" alt="{{$product->name}}" class="aspect-square object-cover rounded-md">
                <div class="opacity-0 group-hover:opacity-100 transition absolute w-full px-6 bottom-5">
                  <div class="flex gap-x-6 justify-center">
                    <button class="rounded-full flex items-center justify-center bg-white shadow-md p-2 hover:scale-110 transition">
                      <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-expand">
                        <path d="m21 21-6-6m6 6v-4.8m0 4.8h-4.8" />
                        <path d="M3 16.2V21m0 0h4.8M3 21l6-6" />
                        <path d="M21 7.8V3m0 0h-4.8M21 3l-6 6" />
                        <path d="M3 7.8V3m0 0h4.8M3 3l6 6" />
                      </svg>
                    </button>
                    <button class="rounded-full flex items-center justify-center bg-white shadow-md p-2 hover:scale-110 transition">
                      <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart">
                        <circle cx="8" cy="21" r="1" />
                        <circle cx="19" cy="21" r="1" />
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                      </svg> </button>
                  </div>
                </div>
              </div>
              <div>
                <p class="font-semibold text-lg">
                  {{$product->name}}
                </p>
                <p class="text-sm text-gray-500">
                  {{$product->brand->name}}
                </p>
              </div>
              <div class="flex items-center justify-between">
                <div class="font-semibold">
                  ${{$product->price}}
                </div>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>