@extends('layouts.main')

@section('container')
 
<section id="home" class="mb-36">
  <div class="container mx-auto flex flex-col md:flex-row items-center">
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 md:pb-0 md:pt-0 px-6">
      @auth
        @if (session()->has('success'))
          <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-bg divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="pl-4 text-sm font-normal text-secondary">{{ session('success') }}</div>
        </div>
        @endif
        <h1 class="text-5xl font-bold leading-tight text-gray-900 mb-8">Selamat datang <span class="font-bold text-secondary italic">{!! auth()->user()->name !!}</span> di <span class="font-bold text-nav italic">Aneka Putra Jaya Farm Shop</span></h1>
      @else
        @if (session()->has('success'))
          <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-bg divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="pl-4 text-sm font-normal text-secondary">{{ session('success') }}</div>
        </div>
        @endif
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