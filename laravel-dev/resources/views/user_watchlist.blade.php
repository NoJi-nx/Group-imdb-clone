<head>
    <title>Watchlist</title>
</head>

<x-app-layout>
    <div class="font-roboto">
        <div class="flex justify-center mt-5">
            <!--Rubrik-->
            <div>
                <h1 class="text-xl mr-5">My Watchlist</h1>
            </div>
            <!--Search-->
            <div>
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-200 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search.." required>
                    </div>
                </form>
            </div>
        </div>
        <!--Breadcrums-->
        <div class="flex justify-start mt-5 pl-20">
            <nav class="flex decoration-slice justify-center py-10" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-black hover:text-blue-600 text-black dark:hover:text-amber-500">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-bold md:ml-2 text-amber-500">Watchlist</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <!--Horizontal rule-->
        <div class="div flex justify-center">
            <hr class="mt-5 border border-3 border-gray-900 w-3/4">
        </div>

        @include('watchlist_card')

</x-app-layout>