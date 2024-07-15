<<<<<<< HEAD
<div class="border-b">
  {{-- <Container> --}}
  <div class="mx-auto max-w-7xl">
    <div class="relative px-4 sm:px-6 lg:px-8 flex h-16 items-center">
      <a href="/" wire:navigate class="ml-4 flex lg:ml-0 gap-x-2">
        {{-- <p class="font-bold text-xl">STORE</p> --}}
        <img src="/images/logo.webp" alt="Logo" class="w-full h-8">
      </a>
      <div class="flex-1 flex justify-center">
        <nav class="flex items-center space-x-4 lg:space-x-6">
          <a href="/products" wire:navigate class="text-sm font-medium {{ request()->is('products')? 'text-red-500': ''}} transition-colors hover:text-black">Products</a>
          <a href="/" class="text-sm font-medium transition-colors hover:text-black" wire:navigate>About</a>
        </nav>
      </div>
      <div class="ml-auto flex items-center gap-x-4">
        <div class="flex items-center rounded-full bg-black px-4 py-3">
          <button class="w-auto rounded-full bg-black border-transparent px-1 disabled:cursor-not-allowed disabled:opacity-50 font-semibold text-white hover:opacity-75 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </button>
          <span class="text-white ml-2 text-sm font-medium">0</span>
=======
<header class="bg-slate-100	 border-b border-gray-250 flex z-50 top-0 flex-wrap md:justify-start md:flex-nowrap w-full sm:w-auto text-sm py-3 md:py-0 sticky shadow-md">
  <nav class=" max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
    <div class="relative md:flex md:items-center md:justify-between">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/" aria-label="Brand">
          <img  src="images/logo.webp" style=" margin-bottom:10px" alt="Violett"  /></a>
        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
          <div class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">

            <a class=" font-bold text-zinc-900 hover:text-zinc-500 py-3 md:py-6  dark:text-blue-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/" aria-current="page">Home</a>

            <a class="font-bold text-violet-950 hover:text-violet-800 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/categories">
              Kategorien
            </a>

            <a class="font-bold  text-violet-950 hover:text-violet-800 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/products">
              Producte
            </a>

            <a class="font-bold  flex items-center text-violet-950 hover:text-violet-800 hover:text-gray-400 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/cart">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              <span class="mr-1 text-violet-950 hover:text-violet-800">Warenkorb</span> <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-violet-50 border border-violet-200 text-violet-950	hover:text-violet-800">0</span>
            </a>
            <div class="pt-3 md:pt-0">
              <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-violet-300 bg-violet-50 text-violet-950 hover:text-violet-800 hover:bg-violet-300 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/login">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                  <circle cx="12" cy="7" r="4" />
                </svg>
                Log in
              </a>
            </div>

            {{-- <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
              <button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                User Name
            <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6" />
            </svg>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                My Orders
              </a>

              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                My Account
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                Logout
              </a>
            </div>
          </div> --}}

          </div>
>>>>>>> 66c56d22f8561608d148bcc859829bfe741959d3
        </div>
      </div>
    </div>
  </div>
  {{-- </Container> --}}
</div>
