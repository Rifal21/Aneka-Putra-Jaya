<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- @vite('resources/css/app.css','resources/js/app.js') --}}
  <link rel="stylesheet" href="/build/assets/app-b016678a.css">
  <link rel="icon" href="../img/al fazza.png">
  <title>Apotek Al-Fazza | {{ $title }}</title>
</head>
<body>
  
  {{-- navbar --}}
  @include('partials.navbar')


  <div class="mt-20">
      @yield('container')
  </div>


  @include('partials.footer')

  
  




  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
    <script src="/build/assets/app-397cd224.js"></script>
</body>
</html>