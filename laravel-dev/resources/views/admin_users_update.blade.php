<x-app-layout>
    @if(Auth::user()->role == 1)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('admin_users.update', $users->id)}}" class="max-w-full bg-white-50 m-10">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-3">Update user</h2>
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>

                <input name="name" value="{{$users->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                <input name="email" value="{{$users->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" "></input>

            </div>
            <div class="mb-6">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                <select name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="{{$users->role}}">@if ($users->role == 0) User @else Admin @endif</option>
                    <option value="@if ($users->role == 0) 1 @else 0 @endif">@if ($users->role == 0) Admin @else User @endif</option>
                </select>
                <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-2">
                    Save</button>
        </form>
    </div>
    @else
    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center mt-20">Access Denied: You are not an Admin</h2>
    @endif
</x-app-layout>