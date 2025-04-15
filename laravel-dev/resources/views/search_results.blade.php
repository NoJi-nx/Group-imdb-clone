<head>
  <title>Search Results</title>
  @vite(['resources/sass/app.scss', 'resources/css/app.css'])
</head>


<x-guest-layout>


<x-slot name="header"> </x-slot>


<div class="mt-10 text-center">
  <!-- Huvudrubriken -->
  <h1 class="text-5xl font-bold mb-6">Search Results: "{{ $query }}"</h1>
  <hr class="border-b-2 border-gray-600 w-20 mx-auto mb-8">

  <!-- Film Sektion -->
  <div class="flex flex-col md:flex-row">
    <div class="bg-white p-8 rounded-lg md:w-1/2 mb-8 md:mr-8 shadow-md">
      <h2 class="text-3xl font-bold mb-6">Movies</h2>
      @if(count($movies) > 0)
      @foreach($movies as $movie)
      <div class="flex items-center mb-6">
      <a href="items/{{ $movie->id }}">
        <img src="{{ $movie->photo }}" alt="{{ $movie->title }}" class="w-32 h-44 object-cover rounded-md">
      </a>
        <div class="ml-6">
        <a href="items/{{ $movie->id }}">
          <h4 class="text-2xl font-bold mb-1">{{ $movie->title }}</h4>
        </a>
          <p class="text-gray-500 mb-2">{{ $movie->genre }} | {{ $movie->releaseYear }}</p>
          <p class="text-gray-500">Cast: {{ $movie->actors->pluck('fullName')->implode(', ') }}</p>
        </div>
      </div>
      @endforeach
      <!--Pagination-->
      {{ $movies->appends(['query' => $query])->links() }}
      @else
      <p class="text-gray-500">No movies found.</p>
      @endif
    </div>

       <!-- Divider -->
<div class="w-full md:w-px bg-gray-400 mx-4 md:mx-8"></div>

<!-- Actors Sektion-->
<div class="bg-white p-8 rounded-lg md:w-1/2 mb-8 md:mr-8 shadow-md">
  <h2 class="text-3xl font-bold mb-6">Actors</h2>
  @if(count($actors) > 0)
  @foreach($actors as $actor)
  <div class="flex items-center mb-6">
    <img src="{{ $actor->photo }}" alt="{{ $actor->fullName }}" class="w-32 h-44 object-cover rounded-md">
    <div class="ml-6">
      <h4 class="text-2xl font-bold mb-1">{{ $actor->fullName }}</h4>
      <p class="text-gray-500">{{ $actor->movies->count() }} movies</p>
    </div>
  </div>
  @endforeach
  <!--Pagination-->
  {{ $actors->appends(['query' => $query])->links() }}
  @else
  <p class="text-gray-500">No actors found.</p>
  @endif
</div>
    </div>
</div>




<x-slot name="footer">
  </x-slot>
</x-guest-layout>
