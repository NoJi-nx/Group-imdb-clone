@foreach (Auth::user()->movies as $movie)
<div class="mt-5 max-w-3xl mx-auto">
    <div class="text-gray-700 text-start bg-gray-200 m-2 rounded">
        <div class="lg:flex lg:items-center">
            <div class="lg:flex-shrink-0">
                <img src="{{ $movie->photo }}" alt="art cover" class="rounded-lg lg:h-64">
            </div>
            <div class="mt-4 lg:mt-0 lg:ml-6 block">
                <div class="flex justify-end -mt-2">
                    <!-- Bookmark icon (Unchecked) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
                        <path fill="#777" d="M17 3a2 2 0 0 1 2 2v16l-7-3l-7 3V5a2 2 0 0 1 2-2h10m-6 4v2H9v2h2v2h2v-2h2V9h-2V7h-2Z" />
                    </svg>
                    <!-- Bookmark icon (Checked) -->
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
                            <path fill="#32a852" d="M17 3a2 2 0 0 1 2 2v16l-7-3l-7 3V5a2 2 0 0 1 2-2h10m-6 11l6.25-6.24l-1.41-1.42L11 11.18L8.41 8.59L7 10l4 4Z" />
                        </svg></a>
                </div>
                <div class="px-5">
                    <div class="text-xl text-black font-bold">
                        {{$movie->title}}
                    </div>
                    <div class="pt-2">
                        <p class="text-sm text-gray-600">{{$movie->releaseYear}} | {{$movie->duration}} | {{$movie->genre}}</p>
                        <p class="text-sm text-gray-600">
                            Director: @foreach ($movies->directors as $director){{ $director->firstName }} {{ $director->lastName }} @endforeach |
                            Actors: @foreach ($movies->actors as $actor){{ $actor->firstName }} {{ $actor->lastName }}, @endforeach</p>
                        <p class="text-base text-gray-600 pt-2">{{ $movie->description }}</p>
                    </div>
                </div>
                <div class="flex justify-end py-2">
                    <button class="flex flex-row justify-end rounded-l-lg bg-gray-900 p-1">
                        <a href="#" class="block m-1 mr-4 text-base leading-tight font-semibold text-gray-300 hover:underline">
                            Reviews </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                            <path fill="#facc15" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach