@extends('layouts.main')

@section('container')

  <div class="max-w-4xl mx-auto mt-48 px-10">
    <div class="flex flex-wrap my-4">
      <div class="w-full md:w-1/2 md:pr-8">
        @if ($produkdet->gambar)
            <img src="{{ asset('storage/' . $produkdet->gambar) }}" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
        @else
            <img src="../../img/obat sample.jpeg" class="object-cover w-full h-full transition-all duration-300 ease-in-out transform hover:scale-110" alt="">
        @endif
      </div>
      <div class="w-full md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">{{$produkdet->nama_produk}}</h2>
        <div class="flex mb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $produkdet->category->name }}</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">{{ $produkdet->outlet->name_outlet }}</span>
        </div>
        <p class="text-gray-700 text-lg mb-4">{!! $produkdet->deskripsi !!}</p>
        <div class="mb-4">
          <div class="text-xl font-bold mb-2">Harga : {{ $produkdet->harga }},-</div>
          {{-- <div class="text-gray-700 text-base mb-2">Stok Tersedia: 10</div> --}}
        </div>
        {{-- <div class="mb-4">
          <label for="jumlah" class="block text-gray-700 font-bold mb-2">Jumlah:</label>
          <input type="number" id="jumlah" name="jumlah" min="1" value="1" class="w-full rounded-lg border border-gray-400 p-2 text-gray-700">
        </div> --}}
          <p class="font-semibold mb-5">Pesan produk melalui :</p>
          {{-- <div class="flex mr-15 md:w-1/2">
            @auth
              <a href="https://api.whatsapp.com/send?phone=6287749323752&text=Hallo%20Admin!%0ASaya%20ingin%20memesan%20barang%20{{ $produkdet->nama_produk }}%0AHarga:{{ $produkdet->harga }}%0ANama_lengkap:%20{{ auth()->user()->name }}" class="border-solid border-2 border-white bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-8 rounded-full"><img src="../img/ico-whatsapp.png" width="24">Whatsapp</a>
              <a href="https://api.whatsapp.com/send?phone=6287749323752&text=Hallo%20Admin!%0ASaya%20ingin%20memesan%20barang%20{{ $produkdet->nama_produk }}%0AHarga:{{ $produkdet->harga }}%0ANama_lengkap:%20{{ auth()->user()->name }}" class="border-solid border-2 border-white bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"><img src="../img/ico-whatsapp.png" width="26" class="mr-2">Whatsapp</a>
              <a href="https://api.whatsapp.com/send?phone=6287749323752&text=Hallo%20Admin!%0ASaya%20ingin%20memesan%20barang%20{{ $produkdet->nama_produk }}%0AHarga:{{ $produkdet->harga }}%0ANama_lengkap:%20{{ auth()->user()->name }}" class="border-solid border-2 border-white bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"><img src="../img/ico-whatsapp.png" width="26" class="mr-2">Whatsapp</a>
            @endauth
            <a href="/produk" class=" px-5 py-2 border border-primary text-white bg-primary hover:bg-secondary  transition-all outline-none bg-nav border-nav hover:text-nav  font-bold rounded-full"><i class="fas fa-arrow-left mr-3"></i>Kembali</a>
          </div> --}}
          <div class="flex flex-wrap justify-center items-center space-x-4">
            <a @auth
                href="https://api.whatsapp.com/send?phone=6287749323752&text=Hallo%20Admin!%0ASaya%20ingin%20memesan%20{{ $produkdet->nama_produk }}%0AHarga:%20{{ $produkdet->harga }}%0ANama_lengkap:%20{{ auth()->user()->name }}%0AAlamat:%20{{ auth()->user()->alamat }}%0AJumlah%20Pesanan:" target="_blank" @else href="/login"
                @endauth  class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-8 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3">
              <img src="../img/ico-whatsapp.png" alt="" class="mr-2" width="26" >
              <span>WhatsApp</span>
            </a>
            <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-9 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3" onclick="return alert('cooming soon bro 😎')">
              <img src="../img/ico-tokopedia.svg" alt="" class="mr-2">
              <span>Tokopedia</span>
            </a>
            <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-8 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3" onclick="return alert('cooming soon bro 😎')">
              <img src="../img/ico-shopee.svg" alt="" class="mr-2">
              <span>Shopee</span>
            </a>
            <a href="/produk" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-full flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-110 mb-3" >
              <i class="fas fa-arrow-left mr-3"></i>
              <span>Kembali</span>
            </a>
            
          </div>
          

        
      </div>
    </div>
  </div>
  
@endsection