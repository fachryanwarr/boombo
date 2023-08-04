@extends('layouts.base')

@section('title')
<title>Boombo | {{ $movie->title }}</title>
@endsection

@section('content')

<div class="mx-auto my-3 px-5">
    <nav class="flex px-5 py-3 text-gray-700 border rounded-lg bg-gray-800 border-gray-700 w-full" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1">
          <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white">
              <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="/movies/choose-datetime/{{ $movie->slug }}" class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Choose Time</a>
            </div>
          </li>  
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="/movies/choose-seats/{{ $movie->slug }}" class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Choose Seat</a>
            </div>
          </li>  
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <p class="ml-1 text-sm font-medium md:ml-2 text-gray-500">Payment</p>
            </div>
          </li>      
        </ol>
    </nav>
</div>

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

<div class="border border-blue-300 rounded-xl w-[80%] md:w-[50%] mx-auto p-3 mt-3">
    <h1 class="text-center text-white text-3xl font-semibold">Purchase Summary</h1>
    
    <div class="flex my-5 p-3 bg-blue-300 bg-opacity-10 rounded-xl mx-auto md:w-[90%]" id="movie_info">
        <img src="{{ $movie->poster_url }}" alt="poster" class="rounded-xl w-[40%] md:w-[20%]">
        <div class="flex flex-col justify-between mx-4">
            <div>
                <p class="text-gray-200 font-semibold text-lg md:text-2xl">{{ $movie->title }}</p>
                <p class="text-gray-400 font-medium text-sm">R <span>{{ $movie->age_rating }}</span>+</p>
            </div>
            
            <p class="bg-slate-600 text-white py-1 rounded-full text-center font-semibold px-2">{{ $data["date"] }} | {{ $data["time"] }}</p>
        </div>
    </div>

    <form action="/movies/purchase-summary/{{ $movie->slug }}" method="POST">
      @csrf
      <div class="w-[90%] mx-auto">
          <p class="text-white font-semibold">Transaction Details</p>
          <hr class="my-2 h-0.5 border-t-0 bg-gray-400 opacity-50" />
          
          <div class="flex justify-between">
              <div>
                  <p class="text-gray-300"><span id="amount">2</span> Tiket</p>
                  <p class="text-gray-300">Price</p>
                  <p class="text-yellow-100 mt-2">Total Price</p>
              </div>
              <div>
                  <p class="text-gray-100 text-right font-semibold" id="seat">{{ $data['seats'] }}</p>
                  <p class="text-gray-100 text-right font-semibold">Rp <span id="price">{{ $movie->ticket_price }}</span></p>
                  <p class="text-yellow-100 text-right font-semibold mt-2">Rp <span id="total-price">{{ $data['total_price'] }}</span></p>
              </div>
          </div>

          <div id="submitted_information" class="hidden"></div>
  
          <div class="flex justify-center mt-2">
            <button type="submit" 
              class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Pay Now</button>  
          </div>
      </div>
    </form>

    </div>
</div>

@endsection
