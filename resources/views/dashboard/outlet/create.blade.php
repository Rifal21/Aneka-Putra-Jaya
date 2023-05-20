@extends('dashboard.layouts.main')

@section('container')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <!-- General elements -->
    <form method="POST" action="/dashboard/outlet" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Nama Outlet</span>
          <input type="text" name="name_outlet" id="name_outlet"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('name_outlet') is-invalid @enderror" value="{{ old('name_outlet') }}" autofocus
            placeholder="Nama Outlet"
          />
          @error('name_outlet')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Slug</span>
          <input name="slug" id="slug" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('slug') is-invalid @enderror" value="{{ old('slug') }}""
            placeholder="Slug"
          />
          @error('slug')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Jadwal</span>
          <input name="jadwal" id="jadwal" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('jadwal') is-invalid @enderror" value="{{ old('jadwal') }}""
            placeholder="jadwal"
          />
          @error('jadwal')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Kontak</span>
          <input name="kontak" id="kontak" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('kontak') is-invalid @enderror" value="{{ old('kontak') }}""
            placeholder="kontak"
          />
          @error('kontak')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Alamat Kantor</span>
          <input name="kantor" id="kantor" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('kantor') is-invalid @enderror" value="{{ old('kantor') }}""
            placeholder="kantor"
          />
          @error('kantor')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-5">
          <img class="img-preview mb-3" width="150" alt="">
          <span class="text-gray-700 dark:text-gray-400">Upload Foto Outlet</span>
          <input type="file" name="foto_outlet" id="foto_outlet"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('foto_outlet') is-invalid @enderror" value="{{ old('foto_outlet') }}" autofocus
            placeholder="Kategori" onchange="previewImage()"
          />
          @error('foto_outlet')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <button type="submit" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Tambah Outlet
        </button>
      </div>
    </form>
  </div>
</main>


<script>
  const name = document.querySelector('#name_outlet');
  const slug = document.querySelector('#slug');

  name.addEventListener('change' , function() {
    fetch('/dashboard/outlet/checkSlug?name_outlet=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  function previewImage() {
    const image = document.querySelector('#foto_outlet');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) { 
      imgPreview.src = oFREvent.target.result;
    }
  }

</script>

@endsection