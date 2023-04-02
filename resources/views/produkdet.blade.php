@extends('layouts.main')

@section('container')
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center">
    <div class="relative m-3 flex flex-wrap mx-auto justify-center">
      <div class="min-w-[340px]flex flex-col group">
        <div class="h-48 md:h-56 lg:h-[24rem] w-full bg-red-500 border-2 border-white flex items-center justify-center text-white text-base mb-3 md:mb-5 overflow-hidden relative">
          @if ($produkdet->gambar)
              <img src="{{ asset('storage/' . $produkdet->gambar) }}" class="object-cover w-full h-full scale-100 group-hover:scale-110 transition-all duration-400" alt="">
          @else
              <img src="https://source.unsplash.com/500x400?{{ $produkdet->category->name }}" class="object-cover w-full h-full scale-100 group-hover:scale-110 transition-all duration-400" alt="">
          @endif
              
              <div class="absolute z-10 border-4 border-primary w-[95%] h-[95%] invisible group-hover:visible opacity-0 group-hover:opacity-100 group-hover:scale-90 transition-all duration-500"></div>
        </div>
        <h1 class=" block text-black text-center hover:text-primary transition-colors duration-150 text-lg md:text-xl mb-1 uppercase">{{$produkdet->nama_produk}}</h1>
        <div class="text-center"><a href="/produk?category={{ $produkdet->category->slug}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $produkdet->category->name }}</a></div>
          <p class="mb-4 font-light  text-sm md:text-sm text-center text-gray-400">{{ $produkdet->deskripsi }}</p>
          <div class="mt-5 mb-10 text-center">
            <span class="text-gray-500">Harga:</span>
            <span class="font-bold text-gray-700">{{ $produkdet->harga }}</span>
          </div>
          <div class="flex justify-center gap-x-3">
            @auth
              <a href="https://api.whatsapp.com/send?phone=6287749323752&text=Hallo%20Admin!%0ASaya%20ingin%20memesan%20barang%20{{ $produkdet->nama_produk }}%0AHarga:{{ $produkdet->harga }}%0ANama_lengkap:%20{{ auth()->user()->name }}" class=" px-5 py-2 border border-green-500 text-white bg-green-500 hover:bg-green-400  transition-all outline-none bg-nav border-nav hover:text-nav  font-bold rounded-full"><i class="fab fa-whatsapp mr-3"></i>Hubungi lewat whatsapp</a>
            @endauth
              <a href="/produk" class=" px-5 py-2 border border-primary text-white bg-primary hover:bg-secondary  transition-all outline-none bg-nav border-nav hover:text-nav  font-bold rounded-full"><i class="fas fa-arrow-left mr-3"></i>Kembali ke produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection