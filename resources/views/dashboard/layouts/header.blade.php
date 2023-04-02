
      <!-- Desktop Header -->
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
      </header>