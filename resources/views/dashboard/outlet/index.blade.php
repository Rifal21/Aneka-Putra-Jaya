@extends('dashboard.layouts.main')

@section('container')
{{-- <main class="w-full flex-grow p-6">
  <h1 class="text-3xl text-black pb-6 font-bold border-b-2 border-black">Tabel Outlet</h1>

  <div class="w-full mt-6">
      <p class="text-xl pb-3 flex items-center">
          <a href="/dashboard/outlet/create" class="focus:outline-none text-white bg-sidebar hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i class="fas fa-plus"></i> Tambah Outlet</a>
      </p>
      @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          {{ session('success') }}
        </div>
      @endif
      <div class="bg-white overflow-auto">
          <table class="min-w-full bg-white">
              <thead class="bg-sidebar text-white">
                  <tr>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No.</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Outlet</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</td>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                @foreach ($outlet as $item)
                  <tr>
                      <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                      <td class="text-left py-3 px-4">{{ $item->name_outlet }}</td>
                      <td class="text-left py-3 px-4 flex">
                        <a href="/dashboard/outlet/{{ $item->slug }}/edit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-0 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fas fa-edit"></i></a>
                        <form action="/dashboard/outlet/{{ $item->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-0 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"><i class="fas fa-trash"></i></button>
                        </form>
                        
                      </td>
                  </tr> 
                @endforeach
              </tbody>
          </table>
      </div>
  </div>

</main> --}}

<div class="mb-10">
  <a href="/dashboard/outlet/create" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    Tambah Outlet
  </a>
</div>
@if (session()->has('success'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr
          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
        >
          <th class="px-4 py-3">No.</th>
          <th class="px-4 py-3">Outlet </th>
          <th class="px-4 py-3">Jadwal </th>
          <th class="px-4 py-3">Kontak </th>
          <th class="px-4 py-3">Kantor </th>
          <th class="px-4 py-3">Foto Outlet </th>
          <th class="px-4 py-3">Action</th>
        </tr>
      </thead>
      <tbody
        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
      >
      @foreach ($outlet as $item)
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            {{ $loop->iteration }}
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $item->name_outlet }}
          </td>
          <td class="px-4 py-3 text-sm">
            {!! $item->jadwal !!}
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $item->kontak }}
          </td>
          <td class="px-4 py-3 text-sm truncate">
            {{ $item->kantor }}
          </td>
          <td class="px-4 py-3 text-sm">
            @if ($item->foto_outlet)
              <img src="{{ asset('storage/' . $item->foto_outlet) }}" width="80" alt="">
            @else
              <img src="../..//img/{{ $item->foto_outlet }}" width="80" alt="">
            @endif
          </td>
          <td class="px-4 py-3">
            <div class="flex items-center space-x-4 text-sm">
              <a href="/dashboard/outlet/{{ $item->slug }}/edit"
                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                aria-label="Edit"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                  ></path>
                </svg>
              </a>
              <form action="/dashboard/outlet/{{ $item->slug }}" method="post">
                @method('delete')
                @csrf
                <button type="submit"
                  class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                  aria-label="Delete" onclick="return confirm('yakin?')"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

