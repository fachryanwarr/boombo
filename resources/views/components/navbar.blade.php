  <nav class="border-gray-200 bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Boombo</span>
    </a>
    <div class="flex items-center md:order-2">
        <a href="/auth/login">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
              Sign In
            </button>
          </a>

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
          <a href="/myticket/" class="block py-2 pl-3 pr-4 rounded md:p-0 text-white md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700">My Tickets</a>
        </li>
        <li>
          <a href="/mybalance/" class="block py-2 pl-3 pr-4 rounded md:p-0 text-white md:hover:text-blue-500 hover:bg-gray-700 md:hover:bg-transparent border-gray-700">Balance</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>