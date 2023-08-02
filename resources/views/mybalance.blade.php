@extends('layouts.base')

@section('title')
<title>Boombo | My Balance</title>    
@endsection

@section('content')

<header class="bg-gray-900 shadow">
    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-300">My Balance</h1>
    </div>
</header>

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
                {{-- {% for data in history %} --}}
                    {{-- {% if data.amount > 0 %} --}}
                    <tbody>
                        <tr class="bg-white text-blue-400">
                            <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                Rp 10.000
                            </th>
                            <td class="px-6 py-4">
                                Top up
                            </td>
                        </tr>
                    </tbody>
                    {{-- {% else %}
                    <tbody>
                    <tr class="bg-white text-red-400">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                            {{data.amount}}
                        </th>
                        <td class="px-6 py-4">
                            {{data.description}}
                        </td>
                    </tr>
                    </tbody>
                    {% endif %}
                {% empty %} --}}
            </table>
            {{-- <p class="text-center mx-auto text-gray-300 text-lg my-5">No transaction yet.</p> --}}
            {{-- {% endfor %} --}}
        </div>
        

        </div>

      </div>
        
    </div>
  </main>

@endsection

