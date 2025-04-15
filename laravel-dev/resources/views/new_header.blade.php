<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- alpinejs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.js"></script>

  <title>Laravel</title>
  @vite('resources/css/app.css')

</head>

<body class="font-roboto">
  <div class="w-full bg-neutral-900 text-white">
    <div x-data="{ open: false }" class="mx-auto flex max-w-screen-xl flex-col px-4 lg:flex-row lg:items-center lg:justify-between lg:px-6 lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <!-- LOGO -->
        <a href="#">
          <img class="h-10" src="https://svgshare.com/i/qWF.svg" alt="LOGO">
        </a>

    <!-- SÖKFUNKTION -->
    <form class="flex items-center" method="GET" action="{{ route('search') }}">   
  <label for="simple-search" class="sr-only">Search</label>
  <div class="relative w-full pr-4">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
    </div>
    <input type="text" id="simple-search" name="query" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-200 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search.." required>
  </div>
</form>

        <!-- MOBIL ÖPPNA/STÄNG IKON -->
        <div class="flex flex-row">
          <button class="focus:shadow-outline rounded-lg focus:outline-none lg:hidden" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>

          <!-- PROFIL USER LOGGED IN DROPDOWN MOBIL -->
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 lg:hidden ml-2">
              <div class="flex flex-row">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2  origin-top-right rounded-md shadow-lg md:w-48">
              <div class="rounded-md bg-black px-2 py-2 shadow">
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="{{ route('profile.edit') }}">Profile</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Watchlist</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">List</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Settings</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign Out</a>
              </div>
            </div>
          </div>
          <!-- END -->

          <!-- PROFIL USER ADMIN LOGGED IN DROPDOWN MOBIL -->
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 lg:hidden ml-2">
              <div class="flex flex-row">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2  origin-top-right rounded-md shadow-lg md:w-48">
              <div class="rounded-md bg-black px-2 py-2 shadow">
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Dashboard</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Users</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Movies</a>
                <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign Out</a>
              </div>
            </div>
          </div>
          <!-- END -->


        </div>

      </div>

      <!-- NAVIGATION / MENYLÄNKAR -->
      <nav :class="{'flex': open, 'hidden': !open}" class="hidden flex-grow flex-col pb-4 lg:flex lg:flex-row lg:justify-end lg:pb-0"> <!-- lg = @media (min-width: 1024px) -->
        <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none lg:mt-0 lg:ml-4" href="#">Movies</a>
        <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none lg:mt-0 lg:ml-4" href="#">Top Rated</a>

        <!-- DROPDOWN BUTTON -->
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg bg-transparent px-4 py-2 text-left text-sm font-semibold hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none lg:mt-0 lg:ml-4 lg:inline lg:w-auto">
            <span>Genres</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="mt-1 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg md:w-48">
            <div class="rounded-md bg-black px-2 py-2 shadow">
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Action</a>
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Adventure</a>
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Comedy</a>
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Sci-fi</a>
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Thriller</a>
              <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Drama</a>
            </div>
          </div>
        </div>
        <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4" href="#">Log In / Sign Up</a>
      </nav>
      <!-- PROFIL USER LOGGED IN DROPDOWN DESKTOP -->
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hidden lg:flex lg:flex-row lg:justify-end lg:pb-0">
          <div class="flex flex-row">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg md:w-48">
          <div class="rounded-md bg-black px-2 py-2 shadow">
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0" href="route('profile.edit')">Profile</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Watchlist</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">List</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Settings</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign Out</a>
          </div>
        </div>
      </div>
      <!-- END -->

      <!-- PROFIL USER LOGGED IN DROPDOWN DESKTOP -->
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hidden lg:flex lg:flex-row lg:justify-end lg:pb-0">
          <div class="flex flex-row">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg md:w-48">
          <div class="rounded-md bg-black px-2 py-2 shadow">
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Dashboard</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Users</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="#">Movies</a>
            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign Out</a>
          </div>
        </div>
      </div>
      <!-- END -->

    </div>
  </div>

</body>

</html>