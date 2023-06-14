<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 shadow-lg">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="/" class="flex items-center">
      <img src="/img/anekalogonobg.png" class="w-16" alt="aneka Logo">
  </a>
  <div class="flex md:order-2">
    @auth
      <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 ml-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            @if (auth()->user()->foto)
              <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" aria-hidden="true"
            />
            @else
                <img src="../../img/profile.jpeg" class="object-cover w-8 h-8 rounded-full" alt="">
            @endif
          </button>
          
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
              <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              @canany(['admin','pegawai'])
              <li>
                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
              </li>
              @endcan
              <li>
                <a href="/profile/{{  auth()->user()->username }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Profile</a>
              </li>
              <li>
                <form action="/logout" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                  @csrf 
                  <button type="submit" >Keluar</button>
                </form>
              </li>
            </ul>
          </div>
      </div>
    @else
      <a href="/login" class="text-white bg-secondary hover:bg-hov focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 ">Masuk</a>
    @endauth
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-hov md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('/') ? 'active' : '' }}" aria-current="page">Beranda</a>
      </li>
      <li>
        <a href="/produk" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-hov md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('produk') ? 'active' : '' }}">Produk</a>
      </li>
      <li>
        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-secondary md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Outlet <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400 {{ Request::is('dropdownNavbarLink') ? 'active' : '' }}" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="/outlets" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-sm">Semua Outlet</a>
                </li>
                @foreach ($outlets as $item)
                  <li>
                    <a href="/outletdet/{{ $item->slug}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-sm">{{ $item->name_outlet }}</a>
                  </li>
                @endforeach

              </ul>
          </div>
      </li>
      <li>
        <a href="/tentang" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-hov md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('tentang') ? 'active' : '' }}">Tentang Kami</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

{{-- <nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="#" class="text-white text-lg font-semibold">Logo</a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li class="relative group">
            <a href="#" class="text-gray-300 hover:text-white px-2 py-1">Menu 1</a>
            <div class="absolute left-0 hidden group-hover:block bg-gray-800 w-32 py-2 mt-2">
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Submenu 1</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Submenu 2</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Submenu 3</a>
            </div>
          </li>
          <li>
            <a href="#" class="text-gray-300 hover:text-white px-2 py-1">Menu 2</a>
          </li>
          <li>
            <a href="#" class="text-gray-300 hover:text-white px-2 py-1">Menu 3</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> --}}

