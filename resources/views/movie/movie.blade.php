@extends('layouts.base')

@section('title')
<title>Boombo | {{ $movie->title }}</title>    
@endsection

@section('content')
@include('components.navbar')

@if ($errors->any())
    @foreach ($errors->all() as $error)
      <div id="alert-2" class="flex items-center justify-center mx-auto p-4 my-4 rounded-lg  bg-gray-800 text-red-400 w-[80%] md:w-[50%]" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
          {{ $error }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex items-center justify-center h-8 w-8 bg-gray-800 text-red-400 hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    @endforeach
@endif

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

                        <a href="/movies/choose-datetime/{{ $movie->slug }}">
                            <button 
                            class="mt-10 inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-900">
                                Buy Ticket
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

