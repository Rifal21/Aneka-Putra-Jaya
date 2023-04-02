@extends('dashboard.layouts.main')

@section('container')
  
<div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mt-5">
  @if ($produk_satuan->gambar)
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('storage/' . $produk_satuan->gambar) }}" alt="">
  @else
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://source.unsplash.com/500x400?{{ $produk_satuan->category->name }}" alt="">
  @endif
  
  <div class="flex flex-col justify-between p-4 leading-normal">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $produk_satuan->nama_produk }}</h5>
      <p class="mb-3 font-semibold text-dark ">{{ $produk_satuan->category->name }}</p>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $produk_satuan->deskripsi }}</p>
      <p class="mb-3 text-gray-700 dark:text-gray-400 font-bold">{{ $produk_satuan->harga }}</p>
      <a href="/dashboard/produk" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fas fa-arrow-left"></i> Kembali ke daftar produk</a>
  </div>  
</div>


@endsection