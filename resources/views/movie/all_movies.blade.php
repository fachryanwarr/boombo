<div class="px-8 my-5 text-center md:text-left">
    <p class="font-semibold text-xl text-white">Now Showing</p>
</div>

<div class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-8 px-8 my-5" id="movies">
    @foreach ($movies as $movie)
        <a class="aspect-auto rounded-lg overflow-hidden mx-auto hover:scale-110 transition-transform duration-200 cursor-pointer"
        href="/movies/{{ $movie->slug }}"
        ">
            <div class="aspect-[3/4] hover:shadow-lg">
                <img src="{{ $movie->poster_url }}" class= "w-full rounded-lg">
            </div>
            <p class="font-medium text-md text-gray-200">{{ $movie->title }}</p>
        </a>
    @endforeach
</div>