@extends('dashboard.layouts.main')

@section('container')


<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <!-- General elements -->
    <form method="POST" action="/dashboard/categories/{{ $category->slug }}"  enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Nama Kategori</span>
          <input type="text" name="name" id="name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}"""
            placeholder="Kategori"
          />
          @error('name')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Slug</span>
          <input name="slug" id="slug" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('name') is-invalid @enderror" value="{{ old('slug', $category->slug) }}""
            placeholder="Slug"
          />
          @error('slug')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-5">
          <span class="text-gray-700 dark:text-gray-400">Upload Gambar Sample Produk</span>
          @if ($category->sample)
            <img src="{{ asset('storage/' . $category->sample) }}" class="img-preview mb-3" width="150" alt="">
          @else
            <img class="img-preview mb-3" width="150" alt="">
          @endif
          <input type="hidden" name="samplelama" value="{{ $category->sample }}">
          <input type="file" name="sample" id="sample"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('sample') is-invalid @enderror" value="{{ old('sample') }}" autofocus
            placeholder="Kategori" onchange="previewImage()"
          />
          @error('sample')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <button type="submit" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Update Kategori
        </button>
      </div>
    </form>
  </div>
</main>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change' , function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  function previewImage() {
    const image = document.querySelector('#sample');
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