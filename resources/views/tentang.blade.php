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
    <img class="w-full" src="./img/misi.jpg" alt="Card image">
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
      <p class="font-base text-base text-start ">Email : {{ $item->email }}</p>
      <p class="font-base text-base  text-start ">No HP : {{ $item->no_hp }}</p>
    </div>
  </div>
  @endforeach
  
</div>

  <section id="kontak" class="pt-36 pb-32 dark:bg-slate-800">
    <div class="container">
      <div class="w-full px-4" data-aos="zoom-out">
        <div class="mx-auto mb-16 max-w-xl text-center">
          <h4 class="mb-2 text-lg font-semibold text-primary">Contact</h4>
          <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
          <p class="text-md font-medium text-secondary md:text-lg"></p>
        </div>
      </div>

      <div class="alert hidden lg:mx-auto flex lg:w-2/3 p-4 mb-4 text-sm text-white bg-primary rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-bold text-white dark:text-green-800">Pesan berhasil dikirim.</span> Terimakasih telah berkunjung.
        </div>
      </div>
      <form name="Hubungi saya">
        <div class="w-full lg:mx-auto lg:w-2/3">
          <div class="mb-8 w-full px-4" data-aos="zoom-out">
            <label for="name" class="text-base font-bold text-primary">Nama</label>
            <input type="text" name="name" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
          </div>
          <div class="mb-8 w-full px-4" data-aos="zoom-out">
            <label for="email" class="text-base font-bold text-primary">Email</label>
            <input type="email" name="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
          </div>
          <div class="mb-8 w-full px-4" data-aos="zoom-out" >
            <label for="pesan" class="text-base font-bold text-primary">Pesan</label>
            <input type="textarea" name="pesan" id="pesan" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
          </div>
          <div class="w-full" data-aos="zoom-in">
            <button type="submit" class="btn-kirim w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg" >Kirim</button>

            <button type="button" class="btn-loading hidden w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg" disabled>
              <svg class="inline h-5 w-5 mr-3 text-white animate-spin dark:text-gray-200 fill-dark" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
              Processing...
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
s
@endsection