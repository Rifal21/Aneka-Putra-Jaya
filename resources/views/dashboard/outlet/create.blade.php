@extends('dashboard.layouts.main')

@section('container')
  <h1 class="text-3xl text-black pb-6 font-bold border-b-2 border-black mb-10">Tambah Outlet</h1>

  
<form method="POST" action="/dashboard/outlet">
  @csrf
  <div class="mb-6">
    <label for="name_outlet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Outlet</label>
    <input type="text" id="name_outlet" name="name_outlet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name_outlet') is-invalid @enderror" value="{{ old('name_outlet') }}" autofocus>
    @error('name_outlet')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
    <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('slug') }}">
    @error('slug')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
</form>


<script>
  const name = document.querySelector('#name_outlet');
  const slug = document.querySelector('#slug');

  name.addEventListener('change' , function() {
    fetch('/dashboard/outlet/checkSlug?name_outlet=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

</script>

@endsection