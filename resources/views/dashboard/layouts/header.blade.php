
      {{-- <!-- Desktop Header -->
      <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
          <button
            @click="isOpen = !isOpen"
            class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none"
          >
            <img src="{{ asset('storage/' . auth()->user()->foto) }}" />
          </button>
          <button
            x-show="isOpen"
            @click="isOpen = false"
            class="h-full w-full fixed inset-0 cursor-default"
          ></button>
          <div
            x-show="isOpen"
            class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16"
          >
          <a href="/profile/{{ auth()->user()->username }}" class="flex items-center {{ Request::is('dashboard/profile') ? 'active-nav-link' : '' }}  opacity-75 hover:opacity-100 py-4 pl-6 nav-item" >
          <i class="fas fa-user mr-3"></i>
          Profile
          </a>

            <form action="/logout" method="post"  class="block px-4 py-2 account-link">
              @csrf
              <button type="submit"><i class="fas fa-sign-out-alt mr-3"></i>Keluar</button>
            </form>

          </div>
        </div>
      </header>

      <!-- Mobile Header & Nav -->
      <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
        <div class="flex items-center justify-between">
          <a
            href="index.html"
            class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
            >X-Sha Admin</a
          >
          <button
            @click="isOpen = !isOpen"
            class="text-white text-3xl focus:outline-none"
          >
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
          </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
          <a
            href="/dashboard"
            class="flex items-center {{ Request::is('/dashboard') ? 'activ-nav-link' : '' }} text-white py-2 pl-4 nav-item"
          >
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
          </a>
          <a
            href="/dashboard/categories"
            class="flex items-center {{ Request::is('/dashboard/produk') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
          <i class="fas fa-th-list mr-3"></i>
            Kategori Produk
          </a>
          <a
          href="/dashboard/outlet*"
          class="flex items-center {{ Request::is('dashboard/outlet*') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
        >
        <i class="fas fa-building mr-3"></i> 
        Outlet
        </a>
          <a
            href="/dashboard/produk"
            class="flex items-center {{ Request::is('/dashboard/produk') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
          <i class="fas fa-shopping-bag mr-3"></i>
            Produk
          </a>
          @cannot('pegawai')
          <a
            href="/dashboard/pengguna"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
          <i class="fas fa-users mr-3"></i>
            Pengguna
          </a>
          @endcannot
          <form action="/logout" method="post" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            @csrf
            <button type="submit">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Keluar
            </button>
          </form>
        </nav>
      </header> --}}

    {{-- <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
    
            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                    </a>
                </div>
    
                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <span class="relative w-full">
                        <input aria-label="search" type="search" id="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                            </svg>
                        </div>
                    </span>
                </div>
    
                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> Hi, Admin {{ auth()->user()->name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                                <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                    <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                    <a href="/profile/{{ auth()->user()->username }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                    <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                    <div class="border border-gray-800"></div>                                    
                                    <form action="/logout" method="post" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                                      @csrf
                                      <button type="submit">
                                        <i class="fas fa-sign-out-alt fa-fw"></i> Keluar
                                      </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    
        </nav>
    </header> --}}

    <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
      <div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
      >
        <!-- Mobile hamburger -->
        <button
          class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
          @click="toggleSideMenu"
          aria-label="Menu"
        >
          <svg
            class="w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
          <div
            class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
          >
            <div class="absolute inset-y-0 flex items-center pl-2">
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
              type="text"
              placeholder="Search for projects"
              aria-label="Search"
            />
          </div>
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
          <!-- Theme toggler -->
          <li class="flex">
            <button
              class="rounded-md focus:outline-none focus:shadow-outline-purple"
              @click="toggleTheme"
              aria-label="Toggle color mode"
            >
              <template x-if="!dark">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                  ></path>
                </svg>
              </template>
              <template x-if="dark">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </template>
            </button>
          </li>
          <!-- Notifications menu -->
          {{-- <li class="relative">
            <button
              class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
              @click="toggleNotificationsMenu"
              @keydown.escape="closeNotificationsMenu"
              aria-label="Notifications"
              aria-haspopup="true"
            >
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                ></path>
              </svg>
              <!-- Notification badge -->
              <span
                aria-hidden="true"
                class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
              ></span>
            </button>
            <template x-if="isNotificationsMenuOpen">
              <ul
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.away="closeNotificationsMenu"
                @keydown.escape="closeNotificationsMenu"
                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
              >
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Messages</span>
                    <span
                      class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                    >
                      13
                    </span>
                  </a>
                </li>
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Sales</span>
                    <span
                      class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                    >
                      2
                    </span>
                  </a>
                </li>
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Alerts</span>
                  </a>
                </li>
              </ul>
            </template>
          </li> --}}
          <!-- Profile menu -->
          <li class="relative">
            <button
              class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
              @click="toggleProfileMenu"
              @keydown.escape="closeProfileMenu"
              aria-label="Account"
              aria-haspopup="true"
            >
            @if (auth()->user()->foto)
              <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" aria-hidden="true"
            />
            @else
                <img src="../../img/profile.jpeg" class="object-cover w-8 h-8 rounded-full" alt="">
            @endif
            </button>
            <template x-if="isProfileMenuOpen">
              <ul
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.away="closeProfileMenu"
                @keydown.escape="closeProfileMenu"
                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                aria-label="submenu"
              >
                <li class="flex">
                  <a
                    class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="/profile/{{ auth()->user()->username }}"
                  >
                    <svg
                      class="w-4 h-4 mr-3"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      ></path>
                    </svg>
                    <span>Profile</span>
                  </a>
                </li>
                {{-- <li class="flex">
                  <a
                    class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <svg
                      class="w-4 h-4 mr-3"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                      ></path>
                      <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                  </a>
                </li> --}}
                <li class="flex">
                  <form action="/logout" method="POST" class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                    @csrf 
                    <svg
                      class="w-4 h-4 mr-3"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                      ></path>
                    </svg>
                    <button type="submit">Keluar</button>
                  </form>
                </li>
              </ul>
            </template>
          </li>
        </ul>
      </div>
    </header>