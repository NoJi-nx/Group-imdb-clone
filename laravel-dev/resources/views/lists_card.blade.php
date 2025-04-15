<div class="flex flex-col items-center">
    <h1 class="px-4 pt-3 pb-2 text-black text-xl font-bold">My List</h1>
    <div class="flex flex-col">
        @foreach ($lists as $list)
        <!--LIST CONTAINER -->
        <div class="bg-gray-100 hover:bg-gray-200 rounded border p-3 m-2 w-48 ">
            <!-- MOVIE PICTURE -->
            <a class="font-bold" href="/user_lists/{{ $list->id }}">- {{ $list->title }}</a>
        </div>
    </div>
    <div>
        <h1 class="text-lg font-bold text-amber-500"><a href="/user_lists/{{ $list->id }}">See more...</a></h1>
    </div>
    @endforeach
</div>