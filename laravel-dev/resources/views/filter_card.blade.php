   <!-- FILTER SECTION TITLE -->
   <div class="mt-5 pl-20">
       <h2 class="px-4 pt-3 pb-2 text-black text-2xl font-bold">Filter by genre</h2>
       <!-- FILTER CATEGORY BUTTONS -->
       <div class="flex flex-row justify-between bg-neutral-900 rounded-lg p-5 mb-5 leading-10 pr-10">
           @if(Auth::user())
           <div class="flex flex-col">
               <form action="{{ route('movies.showGenre', 'Action')}}" method="GET">
                   <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Action</button>
               </form>
               <form action="{{ route('movies.showGenre', 'Adventure')}}" method="GET">
                   <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Adventure</button>
               </form>
               <form action="{{ route('movies.showGenre', 'Comedy')}}" method="GET">
                   <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Comedy</button>
               </form>
           </div>
           <div class="flex flex-col">
               <form action="{{ route('movies.showGenre', 'Sci-Fi')}}" method="GET">
                   <input hidden name="user_id" value="Auth::user()->id"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Sci-Fi</button>
               </form>
               <form action="{{ route('movies.showGenre', 'Thriller')}}" method="GET">
                   <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Thriller</button>
               </form>
               <form action="{{ route('movies.showGenre', 'Drama')}}" method="GET">
                   <input hidden name="user_id" value="{{Auth::user()->id}}"></input>
                   <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Drama</button>
               </form>
               @else
               <div class="flex flex-col">
                   <form action="{{ route('movies.showGenre', 'Action')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Action</button>
                   </form>
                   <form action="{{ route('movies.showGenre', 'Adventure')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Adventure</button>
                   </form>
                   <form action="{{ route('movies.showGenre', 'Comedy')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Comedy</button>
                   </form>
               </div>
               <div class="flex flex-col">
                   <form action="{{ route('movies.showGenre', 'Sci-Fi')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Sci-Fi</button>
                   </form>
                   <form action="{{ route('movies.showGenre', 'Thriller')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Thriller</button>
                   </form>
                   <form action="{{ route('movies.showGenre', 'Drama')}}" method="GET">
                       <input hidden name="user_id" value="{{NULL}}"></input>
                       <button type="submit" class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-amber-500 hover:text-gray-900 focus:bg-amber-500 focus:text-gray-900 focus:outline-none md:mt-0">Drama</button>
                   </form>
               </div>
               @endif
           </div>
       </div>