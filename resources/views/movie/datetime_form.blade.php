@extends('layouts.base')

@section('title')
<title>Boombo | {{ $movie->title }}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
@endsection

@section('content')

<div class="mx-auto my-3 px-5">

    <nav class="flex px-5 py-3 text-gray-700 border rounded-lg bg-gray-800 border-gray-700 w-full" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
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
              <p class="ml-1 text-sm font-medium md:ml-2 text-gray-500">Choose Time</p>
            </div>
          </li>      
        </ol>
    </nav>
    
    
    
    <div class="mx-auto flex justify-center">
      <div>
        <main class="flex flex-col justify-center min-h-[80vh] w-full overflow-x-hidden">
            <form action="/movies/choose-datetime/{{ $movie->slug }}" method="POST">
                @csrf
                <label for="date" class="font-semibold text-gray-200 mt-5">Choose Date</label>
          
                <div class="relative max-w-sm mt-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                       <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input id="date" name="date" required datepicker datepicker-autohide type="text" autocomplete="off"
                    class="border text-sm rounded-lg block w-full pl-10 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Select date">
                </div>          
                
                
                <label for="watching_time" class="font-semibold text-gray-200 mt-10">Choose Time</label>
          
                <div class="grid w-full grid-cols-4 gap-2 rounded-xl bg-gray-700 p-2 mt-3">
                  <div>
                      <input type="radio" name="watching_time" id="11:00" value="11:00" class="peer hidden" checked />
                      <label for="11:00" class="block cursor-pointer select-none rounded-xl p-2 text-center hover:bg-gray-300 hover:text-slate-700 peer-checked:bg-blue-500 peer-checked:font-bold text-white">11:00</label>
                  </div>
          
                  <div>
                      <input type="radio" name="watching_time" id="13:00" value="13:00" class="peer hidden" />
                      <label for="13:00" class="block cursor-pointer select-none rounded-xl p-2 text-center hover:bg-gray-300 hover:text-slate-700 peer-checked:bg-blue-500 peer-checked:font-bold text-white">13:00</label>
                  </div>
          
                  <div>
                      <input type="radio" name="watching_time" id="15:00" value="15:00" class="peer hidden" />
                      <label for="15:00" class="block cursor-pointer select-none rounded-xl p-2 text-center hover:bg-gray-300 hover:text-slate-700 peer-checked:bg-blue-500 peer-checked:font-bold text-white">15:00</label>
                  </div>
          
                  <div>
                      <input type="radio" name="watching_time" id="20:00" value="20:00" class="peer hidden" />
                      <label for="20:00" class="block cursor-pointer select-none rounded-xl p-2 text-center hover:bg-gray-300 hover:text-slate-700 peer-checked:bg-blue-500 peer-checked:font-bold text-white">20:00</label>
                  </div>
                </div>
            
                <div class="flex justify-end grid-cols-4 gap-2 rounded-xl mt-5 w-full">
          
                  <button type="submit"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Next
                  </button>
      
                </div>

            </form>
    
         
        </main>
      </div>
    </div>
      
    </div>

@endsection