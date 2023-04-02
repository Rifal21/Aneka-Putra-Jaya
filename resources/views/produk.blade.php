@extends('layouts.main')

@section('container')
@include('partials.searchbar')
  
<section class="bg-gray-50 mt-3">
  {{-- @include('partials.searchbar') --}}
  <h1 class="text-center font-bold text-2xl mb-5">{{ $title }}</h1>
  @if ($produk->count())
      <div class="flex flex-wrap justify-center">
        @foreach ($produk as $item)
        {{-- <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
          @if($item->gambar)
            <img class="w-72 h-72" src="{{ asset('storage/' . $item->gambar) }}" alt="Card image">
          @else
            <img class="w-72 h-72" src="https://source.unsplash.com/500x400?{{ $item->category->name }}" alt="Card image">
          @endif
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center uppercase"><a href="/produk?category={{ $item->slug }}">{{ $item->nama_produk }}</a></div>
            <div class="font-semibold text-xl mb-2 text-start "><a href="/produkdet/{{ $item->slug }}" class="bg-secondary text-white py-2 px-4 rounded-full mr-4 hover:bg-gray-500 transition duration-300 ease-in-out text-center">Details</a></div>
            <p class="text-md text-gray-800 mt-0">{{ $item->deskripsi }}</p>
            <p class="text-md text-gray-800 mt-5 font-bold">{{ $item->harga }}</p>
          </div>
          <div class="flex flex-col mb-5 mt-5">
            <a href="/produkdet/{{ $item->slug }}" class="bg-gray-800 text-white py-2 px-4 rounded-full mr-4 hover:bg-gray-700 transition duration-300 ease-in-out text-center">Details</a>
          </div>
        </div> --}}
        <a href="/produkdet/{{ $item->slug }}">
          <div class="relative mb-3 flex flex-wrap mx-auto justify-center">
              <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 ">
                <div class="overflow-x-hidden rounded-2xl relative">
                  @if ($item->gambar)
                      <img class="h-40 rounded-2xl w-full object-cover" src="{{ asset('storage/' . $item->gambar) }}">
                  @else
                      <img class="h-40 rounded-2xl w-full object-cover" src="https://source.unsplash.com/500x400?{{ $item->category->name }}">
                  @endif
                  <p class="absolute right-2 top-2 bg-fuchsia-500 text-white rounded-full p-2 group">
                    <a href="/produk?category={{ $item->category->slug}}">{{ $item->category->slug }}</a>
                  </p>
                </div>
                <div class="mt-4 pl-2 mb-2 flex justify-between ">
                  <div>
                    <p class="text-lg font-bold text-gray-900 mb-3 uppercase hover:text-secondary"><a href="/produkdet/{{ $item->slug }}">{{ $item->nama_produk }}</a></p>
                    <p class="text-md text-gray-800 mt-0">{{ $item->deskripsi }}</p>
                    <p class="text-md text-gray-800 mt-5 font-bold">{{ $item->harga }}</p>
                  </div>
                </div>
                <div class="flex flex-col mb-5 mt-5">
                  <a href="/produkdet/{{ $item->slug }}" class="bg-gray-800 text-white py-2 px-4 rounded-full mr-4 hover:bg-gray-700 transition duration-300 ease-in-out text-center">Lihat detail</a>
                </div>
              </div>
          </div>
        </a>
        {{-- <div class="flex flex-col w-full max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden mb-3">
          <!-- Product image -->
          <div class="w-full h-48 bg-cover bg-center" style="background-image: {{ $item->gambar }}"></div>
          
          <!-- Product details -->
          <div class="p-4">
            <h2 class="mb-2 font-bold text-xl text-gray-800">{{ $item->nama_produk }}</h2>
            <p class="text-sm text-gray-700 leading-tight mb-3">{{ $item->deskripsi }}</p>
            <p class="text-lg font-semibold text-gray-800 mt-2">{{ $item->harga }}</p>
            
            <!-- Buttons -->
            <div class="flex flex-row mt-4">
              <a href="#" class="bg-gray-800 text-white py-2 px-4 rounded-lg mr-4 hover:bg-gray-700 transition duration-300 ease-in-out">Details</a>
              <a href="https://wa.me/1234567890" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-400 transition duration-300 ease-in-out">Hubungi via WhatsApp</a>
            </div>
          </div>
        </div> --}}
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