<div>
    <!-- PROFILE INFO -->
    <div class="flex flex-col justify-center items-center">
        <h1 class="px-4 pt-3 pb-2 text-black text-xl font-bold">Admin</h1>
        <img class="w-40 h-40" src="https://t4.ftcdn.net/jpg/01/18/03/35/360_F_118033506_uMrhnrjBWBxVE9sYGTgBht8S5liVnIeY.jpg" alt="profile picture">
        <h1 class="px-4 pt-3 pb-2 text-black text-xl font-bold">{{Auth::user()->name }}</h1>
        <h3>Member since: {{Auth::user()->created_at }}</h3>
    </div>
    @if(Auth::user()->role == 1)
    <div class="flex flex-col justify-center items-center mt-5">
        <!-- EDIT USERS -->
        <div class="bg-gray-100 hover:bg-gray-200 rounded border mb-2 p-3"><a class="text-black text-xl font-bold" href="/admin_users">Edit Users</a></div>
        <!-- EDIT MOVIES -->
        <div class="bg-gray-100 hover:bg-gray-200 rounded border p-3"><a class="text-black text-xl font-bold" href="/admin_movies">Edit Movies</a></div>
    </div>
    @endif
</div>