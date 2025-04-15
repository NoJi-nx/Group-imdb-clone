<x-app-layout> <!-- Detta är app.blade.php --->
    <x-slot name="header"> <!-- Detta är rad 34 i app.blade.php --->
        <title>Dashboard</title>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(Auth::user()->role == 1)
                    <div class="flex flex-row">
                        <div class="">
                            @include('user_info_card')
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div>
                                    <div class="flex flex-col items-center">
                                        <h1 class="px-4 pt-3 pb-2 text-black text-xl font-bold">My Watchlist</h1>
                                        <div class="flex flex-row flex-wrap mt-5 max-w-3xl">
                                            @include('item_card')
                                        </div>
                                        <div>
                                            <h1 class="text-lg font-bold text-amber-500"><a href="/user_watchlist/{{ $users->id }}">See more...</a></h1>
                                        </div>
                                    </div>
                                </div>
                                @include('lists_card')
                            </div>
                            @include('my_reviews_card')
                            @include('pending_review_card')
                        </div>
                    </div>
                    @else
                    <div class="flex flex-row">
                        <div class="">
                            @include('user_info_card')
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                @include('watchlist_card')
                                @include('lists_card')
                            </div>
                            @include('my_reviews_card')
                        </div>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>