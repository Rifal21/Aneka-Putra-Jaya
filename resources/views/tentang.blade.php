@extends('layouts.main')

@section('container')

<div class="relative">
  <img src="img/benih.jpg" alt="Background Image" class="w-full h-auto">
  <div class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center">
    <div class="text-white text-center">
      <h1 class="text-4xl font-bold mb-4">Apotek Al-Fazza</h1>
      <p class="text-lg">Apoetek Al-Fazza merupakan salah satu perusahaan yang bergerak di bidang farmasi yang menjual obat dan alat kesehatan</p>
    </div>
  </div>
</div>


<div class="flex flex-wrap justify-center bg-slate-100">
  <div class="max-w-lg rounded overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white">
    <img class="w-full" src="./img/visi.jpg" alt="Card image">
    <div class="px-6 py-4">
      {{-- <i class="fas fa-tachometer-alt-fast"></i> --}}
      <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary">Visi</div>
      <p class="mt-2 text-gray-500 text-justify">Menjadi perusahaan terkemuka dalam bidang retail obat obatan dan alat kesehatan dengan harga tejangkau serta membantu masyarakat dalam memberikan pelayanan kesehatan terbaik.</p>
    </div>
  </div>
  <div class="max-w-lg rounded-lg overflow-hidden shadow-lg m-4 px-5 mb-5 bg-white ">
    <img class="w-full" src="./img/misi.jpg" alt="Card image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary">Misi</div>
      <p class="mt-2 text-gray-500 text-start">Menyediakan obat-obatan dan alat kesehatan yang terjangkau dengan pelayanan yang profesional dan informatif guna membantu masyarakat dalam bidang kesehatan.</p>
    </div>
  </div>
</div>

<h1 class="text-2xl font-bold text-center uppercase mb-3 mt-5">Team</h1>
<div class="flex justify-center">
  <p class="border-b-2 w-1/3 border-black "></p>
</div>
<div class="flex flex-wrap justify-center">
  @foreach ($users as $item)
  <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
    @if ($item->foto)
          <img src="{{ asset('storage/' . $item->foto) }}" class="w-full" alt="">
        @else
          <img src="../../img/profile.jpeg" class="w-full" alt="">
        @endif
    <div class="px-6 py-4">
      <div class="font-bold text-base  text-start">Nama : {{ $item->name }}</div>
      <div class="font-semibold text-base  text-start ">Jabatan : {{ $item->name_role}}</div>
      {{-- <p class="font-base text-base text-start ">Email : {{ $item->email }}</p> --}}
      <p class="font-base text-base  text-start ">No HP : {{ $item->no_hp }}</p>
    </div>
  </div>
  @endforeach
  
</div>


<section class="bg-slate-200 dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Kontak Kami</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Hubungi Kami Lewat Form Dibawah Ini</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat Email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="email@site.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Jojo Abdul" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kirim Pesan ..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-secondary sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim pesan</button>
      </form>
  </div>
</section>
@endsection