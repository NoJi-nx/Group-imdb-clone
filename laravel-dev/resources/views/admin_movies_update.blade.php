<x-app-layout>
    @if(Auth::user()->role == 1)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('admin_movies.update', $movies->id)}}" class="max-w-full bg-white-50 m-10">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-3">Update movie</h2>
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>

                <input name="title" value="{{$movies->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                <textarea type="text" rows="10" cols="40" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                {{$movies->description}}</textarea>


            </div>
            <div class="mb-6">
                <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 ">Genre</label>
                <input name="genre" value="{{$movies->genre}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <div class="mb-6">
                <label for="releaseYear" class="block mb-2 text-sm font-medium text-gray-900 ">Release Year</label>
                <input name="releaseYear" value="{{$movies->releaseYear}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <div class="mb-6">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 ">Photo link</label>
                <input name="photo" value="{{$movies->photo}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <div class="mb-6">
                <label for="trailer" class="block mb-2 text-sm font-medium text-gray-900 ">Trailer link</label>
                <input name="trailer" value="{{$movies->trailer}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <div class="mb-6">
                <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Runtime</label>
                <input name="duration" value="{{$movies->duration}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Save</button>
        </form>
    </div>
    @else
    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center mt-20">Access Denied: You are not an Admin</h2>
    @endif
</x-app-layout>