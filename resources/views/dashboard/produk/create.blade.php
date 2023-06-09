@extends('dashboard.layouts.main')

@section('container')



<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <!-- General elements -->
    <form method="POST" action="/dashboard/produk" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Nama Produk</span>
          <input type="text" name="nama_produk" id="nama_produk"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk') }}" autofocus
            placeholder="Nama Produk"
          />
          @error('nama_produk')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Slug</span>
          <input name="slug" id="slug" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('slug') is-invalid @enderror" value="{{ old('slug') }}"
            placeholder="Slug"
          />
          @error('slug')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block mt-4 text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">
            Pilih Kategori
          </span>
          <select name="category_id" id="category_id"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          >
            <option>Pilih Kategori</option>
          @foreach ($categories as $c)
            @if (old('category_id') == $c->id )
                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
            @else
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endif 
          @endforeach
          </select>
        </label>

        {{-- <label class="block mt-4 text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">
            Tersedia di Outlet
          </span>
          <select name="outlet_id" id="outlet_id"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          >
            <option>Pilih Outlet</option>
          @foreach ($outlet as $c)
            @if (old('outlet_id') == $c->id )
                <option value="{{ $c->id }}" selected>{{ $c->name_outlet }}</option>
            @else
                <option value="{{ $c->id }}">{{ $c->name_outlet }}</option>
            @endif
              
          @endforeach
          </select>
        </label> --}}

        <label class="block mt-4 text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">
            Tersedia di Outlet
          </span>
          <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach ($outlet as $item)             
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                  @if (old('outlet_id') == $item->id)
                    <input name="outlet_id[]" id="outlet_id" type="checkbox" value="{{ $item->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="outlet_id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->name_outlet }}</label>
                  @else
                    <input name="outlet_id" id="outlet_id" type="checkbox" value="{{ $item->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="outlet_id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->name_outlet }}</label>
                  @endif

                </div>
            </li>
            @endforeach
          </ul>
        </label>

        <label class="block text-sm mb-3">
          <img class="img-preview mb-3" width="150" alt="">
          <span class="text-gray-700 dark:text-gray-400">Upload Gambar Produk</span>
          <input type="file" name="gambar" id="gambar"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}" autofocus
            placeholder="Kategori" onchange="previewImage()"
          />
          @error('gambar')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Harga</span>
          <input name="harga" id="harga" type="text"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('harga') is-invalid @enderror" value="{{ old('harga') }}"
            placeholder="harga"
          />
          @error('harga')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
          <input name="deskripsi" id="deskripsi" type="text"
            class="block h-32 w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}"
            placeholder=""
          />
          @error('deskripsi')
            <span class="text-xs text-red-600 dark:text-red-400">
              {{ $message }}
            </span>
          @enderror
        </label>
        <button type="submit" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Tambah Produk
        </button>
      </div>
    </form>
  </div>
</main>

<script>
  const name = document.querySelector('#nama_produk');
  const slug = document.querySelector('#slug');

  name.addEventListener('change' , function() {
    fetch('/dashboard/produk/checkSlug?nama_produk=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  function previewImage() {
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) { 
      imgPreview.src = oFREvent.target.result;
    }
  }


</script>
<script>
  var harga = document.getElementById('harga');
  harga.addEventListener('keyup', function(e)
  {
      harga.value = formatRupiah(this.value, 'Rp. ');
  });
  
  function formatRupiah(angka, prefix)
  {
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
          split    = number_string.split(','),
          sisa     = split[0].length % 3,
          rupiah     = split[0].substr(0, sisa),
          ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
          
      if (ribuan) {
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
      }
      
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
  </script>
@endsection