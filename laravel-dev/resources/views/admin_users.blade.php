<x-app-layout>
    @if(Auth::user()->role == 1)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="bg-white border-b  hover:bg-gray-100 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$user->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$user->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                        @if ($user->role == 0) User @else Admin @endif
                    </td>
                    <td class="px-6 py-4">

                        <form method="post" action="{{ route('admin_users.delete', $user->id)}}" class="flex items-end">
                            @csrf
                            @method('DELETE')

                            <a href="{{route('admin_users.edit', $user->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2">Edit</a>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2">Delete</button>
                        </form>
                    </td>
                </tr>


                @empty
                <h2 class="font-semibold text-l text-gray-800 leading-tight mb-3">There are currently no users to manage</h2>
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