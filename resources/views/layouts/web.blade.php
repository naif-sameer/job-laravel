<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    @yield('title')
  </title>

  <!------------------- head style ------------------->
  <link rel="stylesheet" href="{{ asset('assets/css/solid.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!------------------- head style ------------------->
</head>

<body class="bg-light">


  @include('includes.header')

  @yield('content')



  <!------------------- start footer section ------------------->
  <footer class="bg-light text-dark mt-5 py-3">
    <p class="mb-0 text-center">All copyright save for N.S</p>
  </footer>

  @include('includes.script')
</body>

</html>
