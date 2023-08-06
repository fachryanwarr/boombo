@extends('layouts.base')

@section('title')
<title>Boombo | My Ticket</title>    
@endsection

@section('content')
@include('components.navbar')

<header class="bg-gray-900 shadow">
    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-300">My Tickets</h1>
    </div>
</header>

@if (session()->has('status'))
    <div id="alert-1" class="flex items-center justify-center mx-auto p-4 my-4 rounded-lg bg-gray-800 text-blue-400 w-[80%] md:w-[50%]" role="alert">
      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div class="ml-3 text-sm font-medium">
        {{ session('status') }}
      </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
      </button>
    </div>
@endif

<div class="px-8 md:grid md:grid-cols-2 md:place-content-center lg:grid-cols-4 gap-4 mx-auto">
    @if (!empty($tickets))
        @foreach ($tickets as $ticket)

        <div class="flex bg-white md:w-auto my-2 mx-auto ">
          <div class="rotate-180 p-2 [writing-mode:_vertical-lr] w-[10%]">
            <div
              class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
            >
              <span>{{ $ticket->tanggal }}</span>
              <span class="w-px flex-1 bg-gray-900/10"></span>
              <span>{{ $ticket->waktu }}</span>
            </div>
          </div>
        
          <div class="">
            <img
              alt="poster" src= "{{ $ticket->movie->poster_url }}"
              class="h-full w-auto [60%]"
            />
          </div>
        
          <div class="flex flex-col justify-between w-[30%] p-2">
              <h3 class="font-bold uppercase text-gray-900 text-ellipsis">{{ $ticket->movie->title }}</h3>
        
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">{{ $ticket->seat }}</p>
          </div>
  
      </div>
    
        @endforeach
    @else

    @endif

</div>

@endsection
