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

  {{-- testing --}}
  <script>
    window.json = (parma) => JSON.stringify(parma);
  </script>
</head>


<body class="bg-light">
  <div>
    @yield('content')
  </div>

  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/alpinejs.js') }}"></script>


</body>

</html>
