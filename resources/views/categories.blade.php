@extends('layouts.main')

@section('container')
@include('partials.searchbar')
<h1 class="text-center font-bold text-2xl mb-5">{{ $title }}</h1>
<div class="flex overflow-x-auto ml-3 mb-10">
        @foreach ($categories as $category)
          {{-- <div class="flex-shrink-0 w-72 p-4 bg-white border border-gray-200 rounded-md shadow-md mr-4">
            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" alt="Product Image" class="w-full h-48 object-cover rounded-md">
            <h2 class="text-lg font-semibold text-gray-800 mt-4"><a href="/produk?category={{ $category->slug }}">{{ $category->name }}</a></h2>
          </div> --}}
          <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
            <img class="w-full" src="https://source.unsplash.com/500x400?{{ $category->name }}" alt="Card image">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-center uppercase"><a href="/produk?category={{ $category->slug }}">{{ $category->name }}</a></div>
            </div>
            <div class="flex flex-col mb-5 mt-5">
              <a href="/produk?category={{ $category->slug }}" class="bg-gray-800 text-white py-2 px-4 rounded-full mr-4 hover:bg-gray-700 transition duration-300 ease-in-out text-center">Details</a>
            </div>
          </div>
        @endforeach
</div>
@endsection