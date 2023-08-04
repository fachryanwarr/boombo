@extends('layouts.base')

@section('title')
<title>Boombo | {{ $movie->title }}</title>
<script type="text/javascript" src="/js/seats.js"></script>
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
              <p class="ml-1 text-sm font-medium md:ml-2 text-gray-500">Choose Seat</p>
            </div>
          </li>      
        </ol>
    </nav>
</div>

<div class="flex justify-center mt-8">
    <div class="mx-2 flex">
      <div class="mb-1 h-5 w-6 md:h-6 md:w-8 mx-2 rounded-t-full overflow-hidden col-start-6 bg-white"></div>
      <p class="text-gray-200 font-light">Available</p>
    </div>
    <div class="mx-2 flex">
      <div class="mb-1 h-5 w-6 md:h-6 md:w-8 mx-2 rounded-t-full overflow-hidden col-start-6 bg-green-600"></div>
      <p class="text-gray-200 font-light">Selected</p>
    </div>
    <div class="mx-2 flex">
      <div class="mb-1 h-5 w-6 md:h-6 md:w-8 mx-2 rounded-t-full overflow-hidden col-start-6 bg-gray-500"></div>
      <p class="text-gray-200 font-light">Unavailable</p>
    </div>
</div>

<hr class="my-2 h-0.5 border-t-0 bg-gray-400 opacity-50 w-[90%] md:w-[50%] mx-auto" />

<form action="" method="POST">
@csrf
    <p class="hidden" id="ticket_price">{{ $movie->ticket_price }}</p>

    <div class="grid grid-cols-9 gap-1 p-5 md:px-10 w-[90%] md:w-[50%] mx-auto" id="allseats">
        @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'] as $char)
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $num)
              @if (in_array($char . $num, $unavailable_seats))
                    <div class="mb-1 h-5 w-6 md:h-6 md:w-8 bg-transparent rounded-t-full overflow-hidden relative {{ ($num == 5) ? 'col-start-6' : '' }}">
                        <div class="h-full w-full absolute bg-gray-500 z-10 inset-0 peer-checked:bg-green-600 hover:cursor-not-allowed">
                            <p class="text-gray-300 text-center font-medium md:text-sm text-xs ">{{ $char }}{{ $num }}</p>
                        </div>
                    </div>
              @else
                    <div class="mb-1 h-5 w-6 md:h-6 md:w-8 bg-transparent rounded-t-full overflow-hidden relative {{ ($num == 5) ? 'col-start-6' : '' }}">
                        <input type="checkbox" name="seat" value="{{ $char }}{{ $num }}" 
                        class="peer w-full h-full opacity-0 hover:cursor-pointer absolute z-20 inset-0" id="{{ $char }}{{ $num }}" onclick="count('{{ $char }}{{ $num }}')">
                        <div class="h-full w-full absolute bg-white z-10 inset-0 peer-checked:bg-green-600">
                            <p class="text-black text-center font-medium md:text-sm text-xs ">{{ $char }}{{ $num }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>

    <div class="w-[80%] md:w-[50%] bg-gray-300 rounded-lg mx-auto text-center">
        <p class="text-slate-800 font-semibold">SCREEN</p>
    </div>

    <div class="grid grid-cols-2 content-center place-items-center my-5 bg-white bg-opacity-10 mx-auto w-[80%] md:w-[50%] rounded-xl py-3 px-2">
    
        <div class="w-[50%] mx-auto">
          <p class="text-gray-300 font-medium text-sm">Total Price</p>
          <p class="text-white text-xl font-medium mt-1">Rp <span id="price">0</span></p>
          <input type="number" name="total_price" id="total_price" value=0 class="hidden">
          <input type="text" name="selected" id="selected" value='' class="hidden">
        </div>
      
        <div class="w-[50%] mx-auto">
          <button type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Go To Payment
          </button>
        </div>
      
    </div>
</form>

@endsection
