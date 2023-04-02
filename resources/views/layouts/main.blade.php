<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css','resources/js/app.js')
  <link rel="icon" href="../img/xsha.png">
  <title>X-Sha | {{ $title }}</title>
</head>
<body>
  
  {{-- navbar --}}
  @include('partials.navbar')


  <div class="mt-24">
      @yield('container')
  </div>


  @include('partials.footer')

  
  




  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
</body>
</html>