
{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aneka Putra Jaya Admin</title>
    <meta name="author" content="David Grzyb" />
    <meta name="description" content="" />
    <link rel="icon" href="../img/anekalogo.png">

    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");
      .font-family-karla {
        font-family: karla;
      }
      .bg-sidebar {
        background: #274C5B;
      }
      .cta-btn {
        color: #3d68ff;
      }
      .active-nav-link {
        background: #3C5D6B;
      }
      .nav-item:hover {
        background: #365360;
      }
      .account-link:hover {
        background: #724797;
      }
      .is-invalid {
      @apply border-red-500;
      }
    </style>
  </head>
  <body class="bg-gray-100 font-family-karla flex">
    @include('dashboard.layouts.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">

      @include('dashboard.layouts.header')

      <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
          @yield('container')
        </main>

      </div>
    </div>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
  </body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Aneka Putra Admin</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

      <style>
          .active {
              @apply border-blue-600;
          }
      </style>

  </head>

  <body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

  @include('dashboard.layouts.header')


  <main>

      <div class="flex flex-col md:flex-row">
          @include('dashboard.layouts.sidebar')
          <section>
              <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                  <div class="bg-gray-800 pt-3">
                      <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                          <h1 class="font-bold pl-2">{{ $title_dashboard }}</h1>
                      </div>
                  </div>

                  @yield('container')

              </div>
          </section>
      </div>
  </main>




  <script>
      /*Toggle dropdown list*/
      function toggleDD(myDropMenu) {
          document.getElementById(myDropMenu).classList.toggle("invisible");
      }
      /*Filter dropdown options*/
      function filterDD(myDropMenu, myDropMenuSearch) {
          var input, filter, ul, li, a, i;
          input = document.getElementById(myDropMenuSearch);
          filter = input.value.toUpperCase();
          div = document.getElementById(myDropMenu);
          a = div.getElementsByTagName("a");
          for (i = 0; i < a.length; i++) {
              if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                  a[i].style.display = "";
              } else {
                  a[i].style.display = "none";
              }
          }
      }
      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
          if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
              var dropdowns = document.getElementsByClassName("dropdownlist");
              for (var i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (!openDropdown.classList.contains('invisible')) {
                      openDropdown.classList.add('invisible');
                  }
              }
          }
      }
  </script>


  </body>

</html> --}}

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aneka Putra Admin</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="../../img/anekalogonobg.png">
    @vite('resources/css/app.css','resources/js/app.js')
    <link rel="stylesheet" href="../../../css/tailwindoutput.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../../../js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
    <script src="../js/charts-lines.js" defer></script>
    <script src="../js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      @include('dashboard.layouts.sidebar')
      <div class="flex flex-col flex-1 w-full">
        @include('dashboard.layouts.header')
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" > {{ $title_dashboard }} </h2>
            
            @yield('container')
          </div>
        </main>
      </div>
    </div>
  </body>
</html>



