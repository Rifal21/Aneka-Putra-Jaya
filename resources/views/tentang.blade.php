@extends('layouts.main')

@section('container')

<div class="relative">
  <img src="img/benih.jpg" alt="Background Image" class="w-full h-auto">
  <div class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center">
    <div class="text-white text-center">
      <h1 class="text-4xl font-bold mb-4">CV. Aneka Putra Jaya</h1>
      <p class="text-lg">Aneka Putra Jaya ialah perusahaan yang bergerak di bidang agribisnis.</p>
    </div>
  </div>
</div>


<div class="flex flex-wrap justify-center bg-slate-100">
  <div class="max-w-lg rounded overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white">
    <img class="w-full" src="./img/visi.jpg" alt="Card image">
    <div class="px-6 py-4">
      {{-- <i class="fas fa-tachometer-alt-fast"></i> --}}
      <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary">Visi</div>
      <p class="mt-2 text-gray-500 text-justify">Menjadi perusahaan perdagangan multinasional yang menyediakan produk berkualitas dan halal untuk kebutuhan masyarakat di dunia dengan menjujung tinggi prinsip-prinsip syariat agama islam</p>
    </div>
  </div>
  <div class="max-w-lg rounded-lg overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white ">
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