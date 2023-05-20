<div class="flex items-center justify-between flex-wrap p-5 pt-10 ">
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto ">
    <div class="text-sm lg:flex-grow">
      <form action="/produk">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('outlet'))
            <input type="hidden" name="outlet" value="{{ request('outlet') }}">
        @endif
        <div class="relative">
          <input type="text" class="bg-gray-200 text-dark rounded-full border-2 border-white focus:outline-none focus:border-gray-500 py-2 px-4 pl-12 w-full" placeholder="Cari Produk.." name="search" value="{{ request('search') }}">
          <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-4">
            <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.567 13.398a7.5 7.5 0 111.06-1.06l4.87 4.87a.75.75 0 01-1.06 1.06l-4.87-4.87zM7.5 13.5a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center">
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-transparent border border-gray-300 rounded-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filter Kategori <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <div id="dropdown" class="z-10 hidden bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                  <li>
                    <a href="/categories" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Semua Categories</a>
                  </li>
                  @foreach ($categories as $pro)
                  <li>
                      <a href="/produk?category={{ $pro->slug }}" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">{{ $pro['name'] }}</a>
                  </li>
                  @endforeach
                </ul>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>