@extends('layouts.main')

@section('container')
@include('partials.searchbar')
  
<div class="container mx-auto flex flex-col md:flex-row items-center mb-20">
  <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 md:pb-0 md:pt-0 px-6">
    @auth
      <h1 class="text-5xl font-bold leading-tight text-gray-900 mb-8">Selamat datang <span class="font-bold text-secondary italic">{{ auth()->user()->name }}</span> di website resmi <span class="font-bold text-nav italic">X-Sha</span></h1>
    @else
      <h1 class="text-5xl font-bold leading-tight text-gray-900 mb-8">Selamat datang di website resmi <span class="font-bold text-secondary italic">X-Sha</span></h1>
    @endauth

    <p class="text-xl mb-8 leading-normal">Kami menawarkan berbagai macam produk dengan harga yang kompetitif. Telusuri pilihan kami dan temukan apa yang Anda cari hari ini!</p>
    <a href="/produk" class="bg-secondary hover:bg-fuchsia-700 text-white font-bold py-4 px-8 rounded-lg">Lihat Produk</a>
  </div>
  <div class="w-full lg:w-1/2 lg:py-6 text-center">
    <img src="img/xshacaw.jpg" alt="product" class="w-full rounded-lg shadow-md">
  </div>
</div>

<h1 class="text-2xl font-bold text-center uppercase mb-3">Produk Kami</h1>
<div class="flex justify-center">
  <p class="border-b-2 w-1/3 border-black "></p>
</div>
<div class="flex flex-wrap justify-center">
  @foreach ($categories as $item)
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
      <img class="w-full" src="https://source.unsplash.com/500x400?{{ $item->name }}" alt="Card image">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary"><a href="/produk?category={{ $item  ->slug }}">{{ $item->name }}</a></div>
      </div>
    </div>
  @endforeach
  
</div>
<h1 class="text-2xl font-bold text-center uppercase mb-3">Team</h1>
<div class="flex justify-center">
  <p class="border-b-2 w-1/3 border-black "></p>
</div>
<div class="flex flex-wrap justify-center">
  @foreach ($user as $item)
  <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
    <img class="w-full" src="{{ asset('storage/'.$item->foto)  }}" alt="Card image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-center uppercase">{{ $item->name }}</div>
      <p class="font-base text-xl mb-2 text-center ">{{ $item->email }}</p>
    </div>
  </div>
  @endforeach
  
</div>

@endsection