@extends('layouts.base')

@section('title')
<title>Boombo | My Balance</title>    
@endsection

@section('content')
@include('components.navbar')

<header class="bg-gray-900 shadow">
    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-300">My Balance</h1>
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

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-10">

      <div class="mx-auto w-[80%] bg-gray-50 rounded-xl overflow-hidden shadow-lg">

        <div class="mx-auto w-[100%] p-4 text-center bg-gradient-to-br from-pink-500 to-orange-400 rounded-t-xl sm:p-8 ">
          <h5 class="mb-5 md:mb-10 text-3xl md:text-5xl font-bold text-white">Rp {{ auth()->user()->balance }}</h5>
          <p class="mb-5 text-sm md:text-base text-white sm:text-lg italic">
              "Experience hassle-free transactions with our seamless top-up and withdrawal services, bringing you ultimate convenience at your fingertips."
          </p>
          <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
              <a href="/mybalance/withdraw" class="w-full sm:w-auto bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-gray-600 rounded-lg inline-flex items-center justify-center px-4 py-2.5 ">
                  <div class="text-left">
                      <div class="-mt-1 font-sans text-sm font-semibold">Withdraw</div>
                  </div>
              </a>
              <a href="/mybalance/topup" class="w-full sm:w-auto bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-gray-600 rounded-lg inline-flex items-center justify-center px-4 py-2.5 ">
                  <div class="text-left">
                      <div class="-mt-1 font-sans text-sm font-semibold">Top Up</div>
                  </div>
              </a>
          </div>
        </div>

        <div>
          <h2 class="font-semibold text-gray-500 text-xl mx-10 my-5">History</h2>
          <hr>
        
          <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-gray-500 text-center">
                <thead class="text-xs uppercase text-slate-800 text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($histories))  
                        @foreach ($histories as $history)
                            @if ($history->amount > 0)
                                    <tr class="bg-white text-blue-400">
                                        <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                            Rp {{ $history->amount }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $history->description }}
                                        </td>
                                    </tr>
                            @else
                                    <tr class="bg-white text-red-400">
                                        <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                          Rp {{ $history->amount }}
                                        </td>
                                        <td class="px-6 py-4">
                                          {{ $history->description }}
                                        </td>
                                    </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center mx-auto text-gray-300 text-lg my-5 py-3" colspan="2">No transaction yet.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            </div>
        
        </div>

      </div>
        
    </div>
  </main>

@endsection

