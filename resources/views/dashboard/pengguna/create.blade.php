@extends('dashboard.layouts.main')

@section('container')


{{-- <form method="POST" action="/dashboard/pengguna" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror" value="{{ old('name') }}" >
    @error('name')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('username') }}">
    @error('username')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
    <input type="email" id="email" name="email"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required value="{{ old('email') }}">
    @error('email')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">  
    <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Role</label>
    <select id="role_id" name="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option >Pilih Kategori</option>
      @foreach ($role as $c)
        @if (old('role_id') == $c->id )
            <option value="{{ $c->id }}" selected>{{ $c->name_role }}</option>
        @else
            <option value="{{ $c->id }}">{{ $c->name_role }}</option>
        @endif
          
      @endforeach
    </select>
  </div>
  <div class="mb-6">  
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Foto</label>
    <img class="img-preview mb-3" width="150" alt="">
    <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="previewImage()">
    @error('foto')
    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('password') }}">
    @error('password')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
</form> --}}

<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <!-- General elements -->
    <form method="POST" action="/dashboard/pengguna" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Nama Lengkap</span>
          <input type="text" name="name" id="name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus
            placeholder="Nama Lengkap"
          />
          @error('name')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Username</span>
          <input name="username" id="username" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('username') is-invalid @enderror" value="{{ old('username') }}"
            placeholder="Username"
          />
          @error('username')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <input name="email" id="email" type="email"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('email') is-invalid @enderror" value="{{ old('email') }}"
            placeholder="email"
          />
          @error('email')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block mt-4 text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">
            Pilih Role
          </span>
          <select name="role_id" id="role_id"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          >
            <option>Pilih Role</option>
          @foreach ($role as $c)
            @if (old('role_id') == $c->id )
                <option value="{{ $c->id }}" selected>{{ $c->name_role }}</option>
            @else
                <option value="{{ $c->id }}">{{ $c->name_role }}</option>
            @endif 
          @endforeach
          </select>
        </label>

        <label class="block text-sm mb-3">
          <img class="img-preview mb-3" width="150" alt="">
          <span class="text-gray-700 dark:text-gray-400">Upload Foto Pengguna</span>
          <input type="file" name="foto" id="foto"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('foto') is-invalid @enderror" value="{{ old('foto') }}" autofocus
            placeholder="" onchange="previewImage()"
          />
          @error('foto')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Alamat</span>
          <input name="alamat" id="alamat" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}"
            placeholder="alamat"
          />
          @error('alamat')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Password</span>
          <input name="password" id="password" type="password"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('password') is-invalid @enderror" value="{{ old('password') }}"
            placeholder="password"
          />
          @error('password')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <button type="submit" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Tambah Pengguna
        </button>
      </div>
    </form>
  </div>
</main>

<script>
  function previewImage() {
    const image = document.querySelector('#foto');
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