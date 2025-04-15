<head>
    <title>Lists</title>
</head>
<x-app-layout>
    <main class="font-roboto">
        <!-- Header filen -->
        <!-- Rubriker -->
        <h1 class="flex justify-center text-2xl mt-5">My lists</h1>
        <div class="flex flex-col justify-center">
            <!-- Breadcrums -->
            <div class="flex justify-start mt-5 pl-20">
                <nav class="flex decoration-slice justify-center py-10" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-black hover:text-blue-600 text-black dark:hover:text-amber-500">
                                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="text-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-bold md:ml-2 text-amber-500">Lists</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <!-- Card container -->
            <div class="flex flex-row justify-center">
                <!-- Horizontal rule -->
                <div class="div flex justify-center">
                    <hr class="mt-5 border border-3 border-gray-900 w-3/4">
                </div>
                <div class="flex flex-col pr-16">
                    @foreach (Auth::user()->lists as $list)
                    <h1 class="flex justify-center text-2xl mt-5">{{ $list->title }}</h1>
                    @include('list_movies_card')
                    @endforeach
                </div>

                <!-- Create List Form -->
                <div class="flex justify-start flex-col pl-10">
                    <div class="p-5">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="mx-auto w-full max-w-[550px] border border-2 border-black rounded-md shadow-md">
                            <h3 class="m-5 text-lg">Create List</h3>
                            <form action="{{ route('user_lists.store')}}" method="POST">
                                @csrf
                                <div class="m-5">
                                    <label for="title" class="mt-5 mb-3 block text-base font-medium text-[#07074D]">
                                        Title
                                    </label>
                                    <input type="text" name="title" id="title" placeholder="List name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="m-5">
                                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Description
                                    </label>
                                    <textarea rows="4" name="description" id="description" placeholder="Type your description" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                </div>
                                <div>
                                    <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                                    <button class="m-5 hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                        Create List
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Edit List Form -->
                    <div class="p-5">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="mx-auto w-full max-w-[550px] border border-2 border-black rounded-md shadow-md">
                            <h3 class="m-5 text-lg">Edit List</h3>
                            <form action="{{ route('user_lists.update', Auth::user()->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="m-5">
                                    <label for="id" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Choose list
                                    </label>
                                    <select name="id" placeholder="List name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        @foreach ($lists as $list)
                                        <option value="{{ $list->id }}" name="id">{{ $list->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-5">
                                    <label for="title" class="mt-5 mb-3 block text-base font-medium text-[#07074D]">
                                        Edit title
                                    </label>
                                    <input type="text" name="title" id="title" placeholder="List title" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" /></input>
                                </div>
                                <div class="m-5">
                                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Edit Description
                                    </label>
                                    <textarea rows="4" name="description" id="description" placeholder="Type your description" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                </div>
                                <div>
                                    <button class="m-5 hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                        Edit List
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>