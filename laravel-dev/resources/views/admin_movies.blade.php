<x-app-layout>
    @if(Auth::user()->role == 1)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="flex justify-end mt-2 mr-5">
        <a href="{{route('admin_movies.add')}}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">+ Add new movie</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                <tr>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Genre</th>
                    <th scope="col" class="px-6 py-3">Release Year</th>
                    <th scope="col" class="px-6 py-3">Review Score</th>
                    <th scope="col" class="px-6 py-3">Duration</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
                <tr class="bg-white border-b  hover:bg-gray-100 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$movie->title}}
                    </th>
                    <td class="px-6 py-4">
                        {{$movie->description}}
                    </td>
                    <td class="px-6 py-4">
                        {{$movie->genre}}
                    </td>
                    <td class="px-6 py-4">
                        {{$movie->releaseYear}}
                    </td>
                    <td class="px-6 py-4">
                        {{$movie->reviewScore}}
                    </td>
                    <td class="px-6 py-4">
                        {{$movie->duration}}
                    </td>
                    <td class="px-6 py-4">


                        <form method="post" action="{{ route('admin_movies.delete', $movie->id)}}" class="flex items-end">
                            @csrf
                            @method('DELETE')

                            <a href="{{route('movies.showOne', $movie->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2">Show</a>

                            <a href="{{route('admin_movies.edit', $movie->id)}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">Edit</a>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2">Delete</button>
                        </form>
                    </td>
                </tr>


                @empty
                <h2 class="font-semibold text-l text-gray-800 leading-tight mb-3">There are currently no movies to manage</h2>
                @endforelse
            </tbody>
        </table>
    </div>

    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('OBSESSED - contact us') }}
        </h2>
    </x-slot>
    @else
    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center mt-20">Access Denied: You are not an Admin</h2>
    @endif
</x-app-layout>