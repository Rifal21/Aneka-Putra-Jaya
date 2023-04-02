@extends('dashboard.layouts.main')

@section('container')
<main class="w-full flex-grow p-6">
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

</main>
@endsection

