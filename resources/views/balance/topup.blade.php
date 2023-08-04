@extends('layouts.base')

@section('title')
<title>Boombo | Top Up</title>
@endsection

@section('content')

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

<div class="mt-20 mx-auto w-[70%] md:w-[50%] px-4 py-5 lg:px-8 border bg-gradient-to-br from-green-400 to-blue-600 shadow-md rounded-lg">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl text-white">Top Up</h1>
  
      <p class="mt-2 text-white">
        Insert your top up amount.
      </p>
    </div>
  
    <form action="/mybalance/topup/" method="POST" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
      @csrf
      <div>
        <label for="amount" class="sr-only">Amount</label>
  
        <div class="relative">

          <input required type="number" id="amount" name="amount" placeholder="Rp 100,000.00" value="{{ old('amount') }}" autofocus
          class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">

        </div>
      </div>
  
      <div class="flex items-center justify-between">
        <p class="text-sm text-white">
          <a class="underline" href="/mybalance/">Cancel</a>
        </p>
  
        <button
          type="submit"
          class="inline-block rounded-lg bg-blue-900 bg-opacity-50 hover:bg-opacity-70 px-5 py-3 text-sm font-medium text-white"
        >
          Submit
        </button>
      </div>
    </form>
  </div>

@endsection