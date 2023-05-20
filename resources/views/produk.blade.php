@extends('layouts.main')

@section('container')
@include('partials.searchbar')
  
<section class=" mt-3">
  <h1 class="text-center font-bold text-2xl mb-5">{{ $title }}</h1>
  @if ($produk->count())
      <div class="flex flex-wrap justify-center">
        @foreach ($produk as $item)
        <div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg mb-5 transition-all duration-300 ease-in-out transform hover:scale-110">
          @if ($item->gambar)
            <img class="w-full h-64 object-cover" src="{{ asset('storage/' . $item->gambar) }}">
          @else
            <img class="w-full h-64 object-cover" src="../../img/padi.jpeg">
          @endif
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">{{ $item->nama_produk }}</div>
            <div class="mb-2">
              <a href="/produk?category={{ $item->category->slug}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $item->category->name }}</a>
              <a href="/produk?outlet={{ $item->outlet->slug}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">{{ $item->outlet->name_outlet }}</a>
            </div>
            <p class="text-gray-700 text-base mb-2 text-center truncate">{{ $item->deskripsi }}</p>
          </div>
          <div class="flex flex-col mb-5 mt-5">
            <a href="/produkdet/{{ $item->slug }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full text-center">
              Lihat Detail
            </a>
          </div>
        </div>
        @endforeach
      </div>

  @else
      <p class="text-xl text-center text-bold text-nav mb-64">Produk tidak ditemukan.</p>
  @endif


  
  <div class="flex justify-center mt-10">
    {{ $produk->links() }}
  </div>
  




</section>

@endsection