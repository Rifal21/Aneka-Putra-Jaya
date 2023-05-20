@extends('dashboard.layouts.main')

@section('container')

  
{{-- <form method="POST" action="/dashboard/produk/{{ $produk->slug }}" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="mb-6">
    <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
    <input type="text" id="nama_produk" name="nama_produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk', $produk->nama_produk) }}" >
    @error('nama_produk')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
    <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('slug', $produk->slug) }}">
    @error('slug')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">  
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kategori</label>
    <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option >Pilih Kategori</option>
      @foreach ($categories as $c)
        @if (old('category_id' , $produk->category_id) == $c->id )
            <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
        @else
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endif
          
      @endforeach
    </select>
  </div>
  <div class="mb-6">  
    <label for="outlet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Outlet</label>
    <select id="outlet" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option >Pilih Outlet</option>
      @foreach ($outlet as $c)
        @if (old('outlet_id' , $produk->outlet_id) == $c->id )
            <option value="{{ $c->id }}" selected>{{ $c->name_outlet }}</option>
        @else
            <option value="{{ $c->id }}">{{ $c->name_outlet }}</option>
        @endif
          
      @endforeach
    </select>
  </div>
  <div class="mb-6">  
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Update Gambar</label>
    <input type="hidden" name="gambarlama" value="{{ $produk->gambar }}">
    @if ($produk->gambar)
      <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-preview mb-3" width="150" alt="">
    @else
      <img class="img-preview mb-3" width="150" alt="">
    @endif

    <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="previewImage()">
    @error('gambar')
    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-6">
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
    <input type="text" id="harga" name="harga"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required value="{{ old('harga', $produk->harga) }}">
    @error('harga')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>
  <div class="mb-6">  
    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
    <input id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan deskripsi produk..." value="{{ old('deskripsi', $produk->deskripsi) }}"></input>
    @error('deskripsi')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
              {{ $message }}
            </span>
    @enderror
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update </button>
</form> --}}

<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <!-- General elements -->
    <form method="POST" action="/dashboard/produk/{{ $produk->slug }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Nama Produk</span>
          <input type="text" name="nama_produk" id="nama_produk"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk', $produk->nama_produk) }}" autofocus
            placeholder="Kategori"
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
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('slug') is-invalid @enderror" value="{{ old('slug' , $produk->slug) }}"
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
            @if (old('category_id', $produk->category_id) == $c->id )
                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
            @else
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endif 
          @endforeach
          </select>
        </label>

        <label class="block mt-4 text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">
            Tersedia di Outlet
          </span>
          <select name="outlet_id" id="outlet_id"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          >
            <option>Pilih Outlet</option>
          @foreach ($outlet as $c)
            @if (old('outlet_id', $produk->outlet_id) == $c->id )
                <option value="{{ $c->id }}" selected>{{ $c->name_outlet }}</option>
            @else
                <option value="{{ $c->id }}">{{ $c->name_outlet }}</option>
            @endif
              
          @endforeach
          </select>
        </label>

        <label class="block text-sm mb-3">
          <span class="text-gray-700 dark:text-gray-400">Update Gambar Produk</span>
          <input type="hidden" name="gambarlama" value="{{ $produk->gambar }}">
          @if ($produk->gambar)
            <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-preview mb-3" width="150" alt="">
          @else
            <img class="img-preview mb-3" width="150" alt="">
          @endif
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
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('harga') is-invalid @enderror" value="{{ old('harga', $produk->harga) }}"
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
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi', $produk->deskripsi) }}"
            placeholder="deskripsi"
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