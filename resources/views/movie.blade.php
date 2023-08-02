@extends('layouts.base')

@section('title')
<title>Boombo | {{ $movie["title"] }}</title>    
@endsection

@section('content')
    <div class="flex min-h-[80%] p-2 sm:p-0">

        <div class="py-8 px-4 mx-auto max-w-screen-lg lg:py-8">
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4 md:p-8 mb-8 md:w-[80%] mx-auto">
                <div class="flex justify-between">
                    <h1 class="text-white text-3xl md:text-5xl font-extrabold mb-2">{{ $movie->title }}</h1>
                </div>
                <div class="w-full md:flex">
                    <div class="md:w-[40%] rounded-lg overflow-hidden md:py-5">
                        <img src="{{ $movie->poster_url }}" alt="poster" class="rounded-lg w-[90%] mx-auto">
                    </div>
                    <div class="md:w-[60%] md:p-5">
                        <p class="font-semibold text-gray-400 text-md">Description</p>
                        <p class="text-md font-normal text-white mt-1 md:mt-2 text-justify">{{ $movie->description }}</p>
                        <p class="font-semibold text-gray-400 text-md mt-2 md:mt-5">Release Date</p>
                        <p class="font-semibold text-white text-md mt-1 md:mt-2">{{ $movie->release_date }}</p>
                        <p class="font-semibold text-gray-400 text-md mt-2 md:mt-5">Age Rating</p>
                        <p class="font-semibold text-white text-md mt-1 md:mt-2">{{ $movie->age_rating }}</p>
                        <p class="font-semibold text-gray-400 text-md mt-2 md:mt-5">Ticket Price</p>
                        <p class="font-semibold text-white text-md mt-1 md:mt-2">Rp {{ $movie->ticket_price }}</p>
                      
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

