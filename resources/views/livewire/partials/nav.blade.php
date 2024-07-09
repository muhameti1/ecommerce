<div class="border-b">
  {{-- <Container> --}}
    <div class="mx-auto max-w-7xl">
      <div class="relative px-4 sm:px-6 lg:px-8 flex h-16 items-center">
        <a href="/" wire:navigate class="ml-4 flex lg:ml-0 gap-x-2">
          <p class="font-bold text-xl">STORE</p>
        </a>
        <nav class="mx-6 flex items-center space-x-4 lg:space-x-6">
          <a href="/products" wire:navigate class="text-sm font-medium {{ request()->is('products')? 'text-red-500': ''}}  transition-colors hover:text-black " >Products</a>
          <a href="/users" class="text-sm font-medium transition-colors hover:text-black" wire:navigate>About</a>
        </nav>
        <div class="ml-auto flex items0center gap-x-4">
          <div class="flex items-center rounded-full bg-black px-4 py-3">
            <button class="w-auto rounded-full bg-black border-transparent px-1  disabled:cursor-not-allowed disabled:opacity-50 font-semibold text-white hover:opacity-75 transition">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              
            </button>
            <span class="text-white ml-2 text-sm font-medium">0</span>
          </div>
        </div>
    </div>
    </div>
  {{-- </Container> --}}
</div>