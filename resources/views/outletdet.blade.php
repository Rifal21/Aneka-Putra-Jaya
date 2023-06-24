@extends('layouts.main')

@section('container')
<div class="max-w-4xl mx-auto mt-48 px-10">
  <div class="flex flex-wrap my-4">
    <div class="w-full text-center text-4xl mb-10">
      <h1 class="font-bold text-center ">{{ $title }}</h1>
    </div>
    <div class="w-full md:w-1/2 md:pr-8">
      @if ($outletdet->foto_outlet)
          <img src="{{ asset('storage/' . $outletdet->foto_outlet) }}" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
      @else
          <img src="../../img/kantor.jpg" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
      @endif
    </div>
    <div class="w-full md:w-1/2">
      {{-- <h4 class="text-3xl font-bold mb-4 text-center">{{ $outletdet->name_outlet }}</h4> --}}
      {{-- <p class="text-gray-700 text-lg mb-4">{{ $outletdet->deskripsi }}</p> --}}
      <div class="mb-4">
        <div class="text-xl font-bold mb-2">Alamat : {{ $outletdet->kantor }}</div>
        <div class="text-base font-semibold mb-2">Jadwal : {!! $outletdet->jadwal !!}</div>
        <div class="text-base font-semibold mb-2">Kontak : +62{{ $outletdet->kontak }}</div>
      </div>
      <div class="flex flex-wrap md:w-full">
            <a href="/produk?outlet={{ $outletdet->slug }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-8 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3">Lihat semua produk di outlet {{ $outletdet->name_outlet }}  <i class="fas fa-arrow-right ml-3"></i></a>
          <a href="/outlets" class=" px-5 py-2 border border-primary text-white bg-primary hover:bg-secondary  transition-all outline-none bg-nav border-nav hover:text-nav  font-bold rounded-full"><i class="fas fa-arrow-left mr-3"></i>Kembali</a>
      </div>

        

      
    </div>
  </div>
</div>
@endsection