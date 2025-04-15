<head>
    <title>Movies</title>
</head>

<x-guest-layout>
    <x-slot name="header">
    </x-slot>
    <div class="font-roboto bg-white w-full">
        <!-- BREADCRUMBS -->
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
                        <span class="ml-1 text-sm font-bold md:ml-2 text-amber-500">Movies</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="flex flex-row justify-center">
            <!-- MOVIE SECTION TITLE -->
            <div class="mt-5 pl-20">
                <h2 class="pl-6 pt-3 pb-2 text-black text-4xl font-bold">Movies</h2>
                <!-- MOVIE ITEM CARDS -->
                <div class="flex flex-row flex-wrap mt-5">
                    @include('item_card')
                </div>

            </div>
            <!-- FILTER FORM-->
            <div class="w-96 pt-12 pr-20">
                <!-- Filter form -->
                @include('filter_card')
            </div>
        </div>
    </div>
</x-guest-layout>