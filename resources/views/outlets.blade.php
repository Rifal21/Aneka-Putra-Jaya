@extends('layouts.main')

@section('container')
@include('partials.searchbar')
<h1 class="text-center font-bold text-2xl mb-5">{{ $title }}</h1>
<div class="flex overflow-x-auto ml-3 mb-10 flex-wrap justify-center">
        @foreach ($outlets as $outlet)
          {{-- <div class="flex-shrink-0 w-72 p-4 bg-white border border-gray-200 rounded-md shadow-md mr-4">
            <img src="https://source.unsplash.com/500x400?{{ $outlet->name }}" alt="Product Image" class="w-full h-48 object-cover rounded-md">
            <h2 class="text-lg font-semibold text-gray-800 mt-4"><a href="/produk?outlet={{ $outlet->slug }}">{{ $outlet->name }}</a></h2>
          </div> --}}
          <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 px-5 mb-5">
            @if ($outlet->foto_outlet)
              <img src="{{ asset('storage/' . $outlet->foto_outlet) }}" class="w-full" alt="">
            @else
              <img src="../../img/kantor.jpg" class="w-full" alt="">
            @endif
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-center uppercase hover:text-secondary"><a href="/outletdet/{{ $outlet->slug }}">{{ $outlet->name_outlet }}</a></div>
            </div>
            {{-- <div class="flex flex-col mb-5 mt-5">
              <a href="/produk?category={{ $category->slug }}" class="bg-gray-800 text-white py-2 px-4 rounded-full mr-4 hover:bg-gray-700 transition duration-300 ease-in-out text-center">Details</a>
            </div> --}}
          </div>
        @endforeach
</div>
@endsection