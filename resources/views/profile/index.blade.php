@extends('layouts.main')

@section('container')

<section class="pt-14 dark:bg-dark p-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-bold text-primary md:text-xl greet">
             Hallo 👋, saya
            <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">{{ auth()->user()->name }}</span> 
          </h1>
          <h2 class="font-medium text-secondary text-lg mb-1 lg:text-2xl job">
             Username : 
            <span class="text-dark font-bold dark:text-white">{{ auth()->user()->username }}</span> 
          </h2>
          <p class="font-medium text-secondary mb-1 leading-relaxed moto">
            Email :
            <span class="text-dark font-bold dark:text-white">{{ auth()->user()->email }}</span> 
          </p>
          <p class="font-medium text-secondary mb-10 leading-relaxed moto">
            Alamat :
            <span class="text-dark font-bold dark:text-white">{{ auth()->user()->alamat }}</span> 
          </p>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="relative mt-10 lg:mt-9 lg:right-0">
            @if (auth()->user()->foto)
                <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="Profile Picture"  class="max-w-full mx-auto relative z-10">
            @else
                <img src="../../img/profile.jpeg" class="max-w-full mx-auto relative z-10 rounded-full" alt="">
            @endif
            <span
              class="absolute -bottom-0  left-1/2 -translate-x-1/2 md:scale-100"
            >
              <svg
                width="400"
                height="400"
                viewBox="0 0 200 200"
                xmlns="http://www.w3.org/2000/svg"
                data-aos="zoom-out" data-aos-duration="1200"
              >
                <path
                  fill="#14b8a6"
                  d="M31.7,-55C43,-48.4,55.3,-43.7,60.9,-34.9C66.5,-26,65.4,-13,63.4,-1.1C61.5,10.7,58.7,21.5,54.9,33.6C51.2,45.7,46.6,59.2,37.3,63.4C28,67.6,14,62.6,2.4,58.4C-9.2,54.2,-18.4,51,-29.9,48.1C-41.5,45.2,-55.4,42.6,-64.6,34.6C-73.9,26.7,-78.5,13.3,-76.8,1C-75.1,-11.4,-67.1,-22.8,-59.2,-33.1C-51.3,-43.4,-43.5,-52.6,-33.7,-60C-23.8,-67.4,-11.9,-72.9,-0.8,-71.5C10.2,-70,20.4,-61.6,31.7,-55Z"
                  transform="translate(100 100)"
                />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
</section>
  

  

  


@endsection