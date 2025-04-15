<head>
    <title>{{ $movie->title }}</title>
</head>
<x-guest-layout>
    <!-- BODY div -->
    <div class="bg-white pb-40">
        <!-- BREADCRUMBS -->
        @include('header_breadcrum')

        <!-- MOVIE CARD -->
        <div class="flex flex-col justify-center w-full px-20">
            <!-- WATCHLIST BUTTON -mt-96 pb-64 -->
            <div class="flex justify-end -mb-32 pr-20 z-10">
                <!-- BOOKMARK ICON (CHECKED)-->
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-36 h-36" viewBox="0 0 24 24">
                        <path fill="#32a852" d="M17 3a2 2 0 0 1 2 2v16l-7-3l-7 3V5a2 2 0 0 1 2-2h10m-6 11l6.25-6.24l-1.41-1.42L11 11.18L8.41 8.59L7 10l4 4Z" />
                    </svg></a>
            </div>
            <!-- MOVIE ITEM PICTURE -->
            <a href="items/{{ $movie->id }}">
                <img class="rounded-lg drop-shadow-md pt-1" src="{{ $movie->itemPhoto }}" alt="Movie photo">
            </a>
            <!-- REVIEW BUTTON -->
            <div class="flex justify-start -mt-20 pb-10 z-10">
                <button class="flex flex-row justify-end rounded-r-lg bg-gray-900 p-1">
                    <a href="#" class="block m-1 mr-2 text-3xl leading-tight font-semibold text-gray-300 hover:underline">
                        Reviews </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path fill="#facc15" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                    </svg>
                    <!-- RATING SCORE -->
                    <a href="#" class="block m-1 mr-4 text-3xl leading-tight font-semibold text-gray-300 hover:underline">
                        {{ $movie->reviewScore }} </a>
                </button>
            </div>
            <!-- MOVIE TITLE -->
            <h2 class="pb-5 text-black text-4xl font-bold">{{ $movie->title }}</h2>
            <div class="flex flex-row">
                <!-- MOVIE INFO -->
                <p class="flex flex-row text-xl text-gray-600">
                    <!-- RELEASE YEAR -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 pt-0.5 -mr-3">
                        <path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z" />
                    </svg>{{ $movie->releaseYear }} |
                    <!-- MOVIE DURATION -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 pt-0.5 -mr-1 pl-2">
                        <path fill="currentColor" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8z" />
                        <path fill="currentColor" d="M12.5 7H11v6l5.25 3.15l.75-1.23l-4.5-2.67z" />
                    </svg>{{ $movie->duration }} |
                    <!-- MOVIE GENRE -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 pt-0.5 -mr-1 pl-2">
                        <path fill="currentColor" d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4c-1.517 0-2.821.857-3.5 2.104C8.821 3.857 7.517 3 6 3C3.794 3 2 4.794 2 7c0 .902.312 1.727.817 2.396A1.994 1.994 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.638l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2zM4 19v-8h12l.002 8H4z" />
                    </svg>{{ $movie->genre }} |
                </p>
                <!-- ADD TO LIST -->
                <div class="pl-3">
                    <select class="h-8 w-36 text-xs rounded" name="List" required>
                        <option value="" disabled selected hidden>Add to list
                        </option>
                        <option value="Favorite">Favorite movies</option>
                        <option value="Watch">Watch again</option>
                        <option value="Bad">Bad movies</option>
                    </select>
                </div>
            </div>
            <!-- MOVIE DESCRIPTION -->
            <h2 class="pb-1 pt-5 text-black text-2xl font-bold">Description</h2>
            <p class="flex flex-row text-xl text-gray-600">{{ $movie->description }}</p>
            <!-- TRAILER -->
            <h2 class="pb-1 pt-20 text-black text-2xl font-bold">Trailer</h2>
            <iframe class="w-3/5 h-96 rounded drop-shadow-md" src="{{ $movie->trailer }}">
            </iframe>
            <!-- REVIEWS -->
            <h2 class="pb-1 pt-20 text-black text-2xl font-bold">Reviews</h2>
            <!-- REVIEW CARD -->
            @foreach ($reviews as $review)
            <div class="w-3/5 mb-2 mt-2">
                <div class="bg-gray-100 rounded border w-full py-2 px-3">
                    <div class="pt-2">
                        <!-- REVIEW USERNAME AND STAR RATING -->
                        <div class="flex flex-row justify-between">
                            <h1 class="text-lg font-bold text-gray-600">{{$review->username}}</h1>
                            <div class="flex items-right">
                                <!-- STAR RATING -->
                                <p class="text-base text-gray-600 pt-2">{{$review->reviewScore}}</p>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>First star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <!-- GÖMT DESSA FÖR ATT BARA VISA SIFFRAN OCH EN STJÄRNA
                                 <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Second star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Third star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fourth star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fifth star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg> -->
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-base text-gray-600 pt-2">{{$review->reviewDescription}}</p>
                        </div>
                    </div>

                    <!--REVIEW CARD END -->
                </div>
            </div>
            @endforeach
            <a class="bg-black text-white text-center hover:bg-amber-500 hover:text-white text-xl font-bold w-40 p-2 mt-3 rounded-full" href="../items_reviews/{{ $movie->id }}">Add review</a>
        </div>
    </div>
</x-guest-layout>