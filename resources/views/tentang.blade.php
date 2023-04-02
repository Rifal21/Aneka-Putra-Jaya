@extends('layouts.main')

@section('container')
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
{{-- <div class="flex justify-start">
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex mb-3">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-48" src="./img/visi.jpg" alt="Vision Icon">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Visi Kami</div>
        <p class="mt-2 text-gray-500">Menjadi perusahaan perdagangan multinasional yang menyediakan produk berkualitas dan halal untuk kebutuhan masyarakat di dunia dengan menjujung tinggi prinsip-prinsip syariat agama islam</p>
      </div>
    </div>
    <div class="md:flex ">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-48" src="./img/misi.jpg" alt="Mission Icon">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Misi Kami</div>
        <p class="mt-2 text-gray-500">1. Menyediakan produk yang berkualitas dan halal <br>
          2. Memberikan pelayanan yang memuaskan dan menyenangkan <br>
          3. Memberikan kesejahteraan kepada semua unsur yang terlibat( karyawan, owner, investor) <br>
          4. Memberikan manfaat yang besar untukmasyarakat lingkungan sekitar <br>
          5. Memberikan kontribusi terhadap kejayaan islam</p>
      </div>
    </div>
  </div>
</div> --}}

<div class="flex flex-wrap justify-center">
  <div class="max-w-lg rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
    <img class="w-full" src="./img/visi.jpg" alt="Card image">
    <div class="px-6 py-4">
      {{-- <i class="fas fa-tachometer-alt-fast"></i> --}}
      <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary">Visi</div>
      <p class="mt-2 text-gray-500 text-justify">Menjadi perusahaan perdagangan multinasional yang menyediakan produk berkualitas dan halal untuk kebutuhan masyarakat di dunia dengan menjujung tinggi prinsip-prinsip syariat agama islam</p>
    </div>
  </div>
  <div class="max-w-lg rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
    <img class="w-full" src="./img/visi.jpg" alt="Card image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary">Misi</div>
      <p class="mt-2 text-gray-500 text-start">1. Menyediakan produk yang berkualitas dan halal <br>
        2. Memberikan pelayanan yang memuaskan dan menyenangkan <br>
        3. Memberikan kesejahteraan kepada semua unsur yang terlibat( karyawan, owner, investor) <br>
        4. Memberikan manfaat yang besar untukmasyarakat lingkungan sekitar <br>
        5. Memberikan kontribusi terhadap kejayaan islam</p>
    </div>
  </div>
</div>

@endsection