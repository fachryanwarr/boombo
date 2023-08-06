  <nav class="border-gray-200 bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
        <img src="/images/planet.png" class="h-8 mr-3" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Boombo</span>
    </a>
    <div class="flex items-center md:order-2">

      @auth
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="/images/avatar (15).jpg" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none divide-y rounded-lg shadow bg-gray-700 divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-white">{{ auth()->user()->name }}</span>
            <span class="block text-sm truncate text-gray-400">{{ auth()->user()->username }}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <form action="/auth/logout/" method="POST">
                @csrf
                <button type="submit" class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white hover:text-red-300 w-full">
                  Sign Out
                  <svg class="mx-2 w-4 h-4 text-gray-200 inline hover:text-red-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                  </svg>
                </button>
              </form>
            </li>
          </ul>
        </div>      
      @else
        <a href="/auth/sign-in">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
            Sign In
          </button>
        </a>
      @endauth

        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden  focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 rounded md:p-0 {{ ($title === 'home') ? 'text-blue-500' : 'text-white' }} md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/movies/" class="block py-2 pl-3 pr-4 rounded md:p-0 {{ ($title === 'movies') ? 'text-blue-500' : 'text-white' }} md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700">Movies</a>
        </li>
        <li>
          <a href="/myticket/" class="block py-2 pl-3 pr-4 rounded md:p-0 {{ ($title === 'myTicket') ? 'text-blue-500' : 'text-white' }} md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700">My Tickets</a>
        </li>
        <li>
          <a href="/mybalance/" class="block py-2 pl-3 pr-4 rounded md:p-0 {{ ($title === 'balance') ? 'text-blue-500' : 'text-white' }} md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700">Balance</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>