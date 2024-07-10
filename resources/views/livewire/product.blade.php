<div class="bg-white">
  <div class="mx-auto max-w-7xl">
    {{-- <Hero> --}}
    <div class="p-4 sm:p-6 lg:p-8 rounded-xl overflow-hidden">
      <div class="rounded-xl relative aspect-square md:aspect-[2.4/1] overflow-hidden bg-cover" style="background-image: url(../../storage/images/hero.jpg)">
        <div class="h-full w-full flex flex-col justify-center items-center text-center gap-y-8">
          <div class="font-bold text-3xl sm:text-5xl lg:text-6xl sm:max-w-xl max-w-xs">
            Category Billboard
          </div>
        </div>
      </div>
    </div>
    {{-- </Hero> --}}
    <div class="px-4 sm:px-6 lg:px-8 pb-24">
      <div class="lg:grid lg:grid-cols-5 lg:gap-x-8 ">
        {{-- Add mobile Filters --}}
        <div class="hidden lg:block">
          <div class="mb-8">
            <h3 class="text-lg font-semibold">
              Categories
            </h3>
            <hr class="my-4">
            <div class="flex flex-wrap gap-2">
              @foreach ($categories as $category )
              <div x-data="{ selected: false }" class="flex items-center">
                <button 
                    :class="selected ? 'bg-black text-white' : 'bg-white text-gray-800'" 
                    class="rounded-md text-sm p-2 border border-gray-300"
                    @click="selected = !selected">
                    {{$category->name}}
                </button>
            </div>
            
              @endforeach
            </div>
          </div>
          
        </div>
        {{-- Product List --}}
        <div class="mg-6 lg:col-span-4 lg:mt-0">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($products as $product )
            <a href="/products/{{$product->slug}}">
            <div class="bg-white group cursor-pointer rounded-xl border p-3 space-y-4">
                <div class="aspect-square rounded-xl bg-gray-100 relative">
                  <img src="{{url('storage', $product->images[0])}}" alt="{{$product->name}}" class="aspect-square object-cover rounded-md">
                  <div class="opacity-0 group-hover:opacity-100 transition absolute w-full px-6 bottom-5">
                    <div class="flex gap-x-6 justify-center">
                      <button class="rounded-full flex items-center justify-center bg-white shadow-md p-2 hover:scale-110 transition">
                        <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-expand"><path d="m21 21-6-6m6 6v-4.8m0 4.8h-4.8"/><path d="M3 16.2V21m0 0h4.8M3 21l6-6"/><path d="M21 7.8V3m0 0h-4.8M21 3l-6 6"/><path d="M3 7.8V3m0 0h4.8M3 3l6 6"/></svg>
                      </button>
                      <button class="rounded-full flex items-center justify-center bg-white shadow-md p-2 hover:scale-110 transition">
                        <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>                    </button>
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