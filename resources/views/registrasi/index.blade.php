@extends('layouts.main')

@section('container')
<div class="flex justify-center mt-16">
  <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10 mb-10">
    <form class="space-y-6" action="/register" method="POST">
      @csrf
        <img src="../img/{{ $gambar }}" alt="">
        <h5 class="text-2xl font-bold text-gray-900 dark:text-white text-center uppercase  mb-5">{{ $title }}</h5>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('name') is-invalid @enderror mb-3" placeholder="Saodah Nur Fadilah" required value="{{ old('nama') }}">
            @error('name')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('username') is-invalid @enderror mb-3" placeholder="Saodahxx" required value="{{ old('username') }}">
            @error('username')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('email') is-invalid @enderror mb-3" placeholder="name@gmail.com " required value="{{ old('email') }}">
            @error('email')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('password') is-invalid @enderror mb-3" required>
            @error('password')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
            @enderror
        </div>
        {{-- <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
        </div> --}}
        <button type="submit" class="w-full text-white bg-secondary hover:bg-fuchsia-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Daftar</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Sudah punya akun? <a href="/login" class="text-nav hover:underline dark:text-blue-500">Masuk</a>
        </div>
    </form>
  </div>
</div>


@endsection

