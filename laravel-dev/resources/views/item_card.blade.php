@foreach ($movies as $movie)

<!-- MOVIE ITEM CONTAINER -->
<div class="px-6 py-5 w-48">
    <!-- MOVIE PICTURE -->
    <a href="/items/{{ $movie->id }}">
        <img class="rounded-lg h-56" src="{{ $movie->photo }}" alt="Movie photo">
    </a>

    <!-- WATCHLIST BUTTON-->
    <div class="flex justify-end -mt-60 pt-1 pb-32">
        <!-- BOOKMARK ICON (CHECKED)-->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
            <path fill="white" d="M17 3H7a2 2 0 0 0-2 2v16l7-3l7 3V5a2 2 0 0 0-2-2Z" />
        </svg>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 -ml-16" viewBox="0 0 24 24">
                <path fill="#32a852" d="M17 3a2 2 0 0 1 2 2v16l-7-3l-7 3V5a2 2 0 0 1 2-2h10m-6 11l6.25-6.24l-1.41-1.42L11 11.18L8.41 8.59L7 10l4 4Z" />
            </svg></a>
        <!-- Bookmark icon (Unchecked) -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
            <path fill="black" d="M17 3H7a2 2 0 0 0-2 2v16l7-3l7 3V5a2 2 0 0 0-2-2Z" />
        </svg>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 -ml-16" viewBox="0 0 24 24">
                <path fill="#777" d="M17 3a2 2 0 0 1 2 2v16l-7-3l-7 3V5a2 2 0 0 1 2-2h10m-6 4v2H9v2h2v2h2v-2h2V9h-2V7h-2Z" />
            </svg></a>
    </div>

    <!-- REVIEWS BUTTON -->
    <div class="flex justify-start pb-5">
        <button class="flex flex-row justify-end rounded-r-lg bg-gray-900 p-1">
            <a href="#" class="block m-1 mr-2 text-sm leading-tight font-semibold text-gray-300 hover:underline">
                Reviews </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="#facc15" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
            </svg>
            <!-- RATING SCORE -->
            <a href="#" class="block m-1 mr-4 text-sm leading-tight font-semibold text-gray-300 hover:underline">
                4 </a>
        </button>
    </div>
    <!-- ADD TO LIST -->
    @if(Auth::user())
    <div class="pb-2 flex justify-center">
        <form action="{{ route('movies.addMoviesToList') }}" method="POST">
            @csrf
            <select class="h-8 w-36 text-xs rounded" name="list_id" required>
                <option value="" disabled selected hidden>Add to list
                </option>
                @foreach ($lists as $list)
                <option value="{{ $list->id }}" name="list_id">{{ $list->title }}</option>
                @endforeach
            </select>
            <input hidden value="{{ Auth::user()->id }}" name="user_id">
            <input hidden value="{{ $movie->id }}" name="movie_id">
            <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-black px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-1">Add</button>
        </form>
    </div>
    @endif
    <!-- MOVIE TITLE -->
    <h2 class="text-lg text-black font-bold leading-tight pb-2">{{ $movie->title }}</h2>
    <!-- MOVIE ITEAM CARD INFO -->
    <p class="text-sm text-gray-600">{{ $movie->releaseYear }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
</div>
@endforeach