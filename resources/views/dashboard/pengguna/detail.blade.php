@extends('dashboard.layouts.main')

@section('container')
  


<div class="max-w-4xl mx-auto mt-20">
    <div class="flex flex-wrap my-4">
      <div class="w-full md:w-1/2 md:pr-8">
        @if ($user->foto)
            <img src="{{ asset('storage/' . $user->foto) }}" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
        @else
            <img src="../../img/profile.jpeg" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
        @endif
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">{{$user->name}}</h2>
        <div class="flex flex-wrap mb-2">
          <span class="block px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Username : {{ $user->username }}</span>
          <span class="block px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Email : {{ $user->email }}</span>
          @foreach ($users as $item)          
          <span class="block px-3 py-1 text-sm font-semibold text-gray-700">Role : {{ $item->name_role }}</span>
          @endforeach
          <span class="block px-3 py-1 text-sm font-semibold text-gray-700">Alamat : {{ $user->alamat }}</span>
          <span class="block px-3 py-1 text-sm font-semibold text-gray-700">No HP : {{ $user->no_hp }}</span>
        </div>
        <a href="/dashboard/pengguna" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3">
            <i class="fas fa-arrow-left mr-3"></i>
            <span>Kembali</span>
        </a>          
        </div>
          

        
      </div>
    </div>
  </div>


@endsection