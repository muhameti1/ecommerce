<div class="bg-white">
    <div class="mx-auto max-w-7xl">
        <div class="px-4 py-10 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                <div class="w-full mb-8 md:w-1/2 md:mb-0" x-data="{ mainImage: '{{url('storage', $product->images[0])}}' }">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                      <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                        <img x-bind:src="mainImage" alt="" class="object-cover w-full lg:h-full rounded-md">
                      </div>
                      <div class="flex-wrap hidden md:flex ">
                      @foreach ($product->images as $image )
                      
                        <div class="w-1/2 p-2 sm:w-1/4 rounded-md" x-on:click="mainImage='{{url('storage', $image)}}'">
                          <img src="{{url('storage', $image)}}" alt="" class="object-cover w-full lg:h-20 cursor-pointer hover:border hover:border-blue-500 rounded-md">
                        </div>
                      
                      @endforeach
                    </div>
                    </div>
                </div>
                <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900"> {{$product->name}} </h1>
                        <p> {{$product->description}} </p>
                        <div class="mt-3 flex items-end justify-between">
                            <p class="text-2xl text-gray-900">
                                ${{$product->price}}
                            </p>
                        </div>
                        <hr class="my-4">
                        <div class="flex items-center gap-x-4 ">
                            <h3 class="font-semibold text-black">Quantity</h3>
                        </div>
                        <div class="mt-10 flex items-center gap-x-3">
                            <a href="#" class="p-2 px-4 bg-gray-950 rounded-full text-white flex items-center gap-x-2">
                                Add To Cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-10">
            <div class="space-y-4">
                <h3 class="font-bold text-3xl">Related Products</h3>
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

