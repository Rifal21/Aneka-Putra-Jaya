@extends('layouts.main')

@section('container')
 
<section id="home" class="mb-36">
  <div class="container mx-auto flex flex-col md:flex-row items-center">
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 md:pb-0 md:pt-0 px-6">
      @auth
        <h1 class="text-5xl font-bold leading-tight text-gray-900 mb-8">Selamat datang <span class="font-bold text-secondary italic">{!! auth()->user()->name !!}</span> di <span class="font-bold text-nav italic">Aneka Putra Jaya Farm Shop</span></h1>
      @else
        <h1 class="text-5xl font-bold leading-tight text-gray-900 mb-8">Selamat datang di <span class="font-bold text-secondary italic">Aneka Putra Jaya Farm Shop</span></h1>
      @endauth
  
      <p class="text-xl mb-8 leading-normal">Kami menawarkan berbagai macam produk dengan harga yang kompetitif. Telusuri pilihan kami dan temukan apa yang Anda cari hari ini!</p>
      <a href="/produk" class="bg-secondary hover:bg-hov text-white font-bold py-4 px-8 rounded-lg">Lihat Semua Produk</a>
    </div>
    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
      <img src="img/desain-tanpa-judul.png" alt="product" class="w-full rounded-lg ">
    </div>
  </div>
</section>

<section id="produk" class=" bg-bg pb-10">
  <h1 class="text-2xl font-bold text-center uppercase mb-3 text-white pt-10">Produk Kami</h1>
  <div class="flex justify-center mb-20">
    <p class="border-b-2 w-1/3 border-white"></p>
  </div>
  <div class="flex flex-wrap justify-center">
    @foreach ($categories as $item)
      <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white transition-all duration-300 ease-in-out transform hover:scale-110 ">
        @if ($item->sample)
          <img src="{{ asset('storage/' . $item->sample) }}" class="w-full" alt="">
        @else
          <img src="../../img/produk.jpg" class="w-full" alt="">
        @endif
        <div class="px-6 w-full py-4 hover:text-secondary">
          <div class="font-bold text-xl mb-2 text-center uppercase "><a href="/produk?category={{ $item->slug }}">{{ $item->name }}</a></div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center">
    <a href="/produk" class="bg-secondary hover:bg-hov text-white font-bold py-4 px-8 rounded-lg">Lihat Semua Produk</a>
  </div>
</section>

<section id="produk" class=" pb-10">
  <h1 class="text-2xl font-bold text-center uppercase mb-3 text-dark pt-10">Otlet Kami</h1>
  <div class="flex justify-center mb-20">
    <p class="border-b-2 w-1/3 border-black"></p>
  </div>
  <div class="flex flex-wrap justify-center">
    @foreach ($outlets as $item)
      <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white transition-all duration-300 ease-in-out transform hover:scale-110 ">
        @if ($item->foto_outlet)
          <img src="{{ asset('storage/' . $item->foto_outlet) }}" class="w-full" alt="">
        @else
          <img src="../../img/kantor.jpg" class="w-full" alt="">
        @endif
        <div class="px-6 w-full py-4 hover:text-secondary">
          <div class="font-bold text-xl mb-2 text-center uppercase "><a href="/outletdet/{{ $item->slug }}">{{ $item->name_outlet }}</a></div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center">
    <a href="/produk" class="bg-secondary hover:bg-hov text-white font-bold py-4 px-8 rounded-lg">Lihat Semua Outlet</a>
  </div>
</section>



@endsection