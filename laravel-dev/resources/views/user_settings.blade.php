<head>
    <title>User Settings</title>
</head>

<x-app-layout>
    <div>
        <main>
            <!--Header filen-->
            @include('new_header')
            <!-- Create List Form -->
            <div class="flex justify-end flex-col pl-10">
                <div class="p-5">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="mx-auto w-full max-w-[550px] border border-2 border-black rounded-md shadow-md">
                        <h3 class="m-5 text-lg">USER SETTINGS</h3>
                        <form action="#" method="POST">
                            <div class="m-5">
                                <label for="username" class="mt-5 mb-3 block text-base font-medium text-[#07074D]">
                                    Change Username
                                </label>
                                <input type="text" name="username" id="username" placeholder="User 1" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="m-5">
                                <label for="bio" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Edit bio
                                </label>
                                <textarea rows="4" name="bio" id="bio" placeholder="This is my profile!" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>
                            <div class="m-5">
                                <label for="old password" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Old Password
                                </label>
                                <input type="password" name="password" id="password" placeholder="********" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="m-5">
                                <label for="new password" class="mb-3 block text-base font-medium text-[#07074D]">
                                    New Password
                                </label>
                                <input type="password" name="password" id="password" placeholder="********" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="m-5">
                                <label for="email" class="mt-5 mb-3 block text-base font-medium text-[#07074D]">
                                    Change Email
                                </label>
                                <input type="email" name="email" id="email" placeholder="user1@user.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="flex justify-center">
                                <button class="m-5 hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                    Submit Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Footer-->
                @include('new_footer')
        </main>
    </div>
</x-app-layout>