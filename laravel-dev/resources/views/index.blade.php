<head>
  <title>Home</title>
</head>

<x-guest-layout>
  <div class="font-roboto bg-white flex justify-center pt-20 h-full w-full">
    <div class="flex flex-col">
      <!-- MOVIES OF THE DAYS SECTION -->
      <div class="flex flex-col">
        <!-- TITLE -->
        <h2 class="pb-5 text-black text-3xl font-bold">MOVIES OF THE DAY</h2>
        @foreach ($movies as $movie)
        <!-- CAROUSEL -->
        <div class="slideshow-container">
          <!-- SLIDE 1 -->
          <div class="mySlides fade">
            <a href="/items/{{ $movie->id }}"><img class="h-96 max-w-3/4 rounded-lg" src="{{ $movie->itemPhoto }}"></a>
            <!-- REVIEWS BUTTON -->
            <div class="flex justify-start pb-5 -mt-10">
              <button class="flex flex-row justify-end rounded-r-lg bg-gray-900 p-1">
                <a href="#" class="block m-1 mr-2 text-sm leading-tight font-semibold text-gray-300 hover:underline">
                  Reviews </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path fill="#facc15" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                </svg>
                <!-- RATING SCORE -->
                <a href="#" class="block m-1 mr-4 text-sm leading-tight font-semibold text-gray-300 hover:underline">
                  {{ $movie->reviewScore }}</a>
              </button>
            </div>
          </div>
        </div>
        @endforeach

        <!-- ARROWS SECTION-->
        <div class="flex flex-row justify-between -mt-60">
          <!-- ARROW PREVIOUS -->
          <a class="" onclick="plusSlides(-1)">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 fill-white hover:fill-amber-500" viewBox="0 0 24 24">
              <path d="M15.125 21.1L6.7 12.7q-.15-.15-.213-.325T6.425 12q0-.2.062-.375T6.7 11.3l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.863t-.375.887q-.375.375-.875.375t-.875-.375Z" />
            </svg>
          </a>
          <!-- ARROW NEXT-->
          <a class="" onclick="plusSlides(1)">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 fill-white hover:fill-amber-500" viewBox="0 0 24 24">
              <path d="M7.15 21.1q-.375-.375-.375-.888t.375-.887L14.475 12l-7.35-7.35q-.35-.35-.35-.875t.375-.9q.375-.375.888-.375t.887.375l8.4 8.425q.15.15.213.325T17.6 12q0 .2-.063.375t-.212.325L8.9 21.125q-.35.35-.863.35T7.15 21.1Z" />
            </svg>
          </a>
        </div>
      </div>

      <!-- TRAILER SECTION -->
      <div class="flex flex-col py-60">
        <!-- TITLE -->
        <h2 class="pb-5 text-black text-3xl font-bold">TRAILERS</h2>
        <!-- TRAILERS -->
        @foreach ($movies as $movie)
        <iframe class="h-96 my-5 rounded-lg drop-shadow-md" src="{{ $movie->trailer }}">
        </iframe>
        <a href="/items/{{ $movie->id }}">
          <h2 class="pb-5 text-black text-xl font-bold">{{ $movie->title }}</h2>
        </a>
        @endforeach
      </div>
    </div>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

  <x-slot name="footer"></x-slot>
</x-guest-layout>