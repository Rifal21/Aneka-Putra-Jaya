
<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
  <div class="p-6">
    <a
      href="/"
      class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
      ><img src="../../img/xsha.png" width="150" alt=""></a
    >
    {{-- <button
      class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center"
    >
      <i class="fas fa-plus mr-3"></i> Tambah Produk
    </button> --}}
  </div>
  <nav class="text-white text-base font-semibold pt-3">
    
    <a
      href="/dashboard"
      class="flex items-center {{ Request::is('dashboard') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
    >
      <i class="fas fa-tachometer-alt mr-3"></i>
      Dashboard
    </a>
    <a
      href="/dashboard/categories"
      class="flex items-center {{ Request::is('dashboard/categories*') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
    >
    <i class="fas fa-th-list mr-3"></i>
      Kategori Produk
    </a>
    <a
      href="/dashboard/outlet"
      class="flex items-center {{ Request::is('dashboard/outlet*') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
    >
    <i class="fas fa-building mr-3"></i> 
    Outlet
    </a>
    <a
      href="/dashboard/produk"
      class="flex items-center {{ Request::is('dashboard/produk*') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
    >
    <i class="fas fa-shopping-bag mr-3"></i>
      Produk
    </a>

      <a href="/dashboard/pengguna" class="flex items-center {{ Request::is('dashboard/pengguna*') ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" >
        <i class="fas fa-users mr-3"></i>
        Human source
      </a>
    

  </nav>
</aside>