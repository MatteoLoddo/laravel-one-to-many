<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title')</title>
  <link rel="stylesheet" href="{{ asset('./css/app.css') }}">

  <script src="{{ asset('./js/app.js') }}"></script>
</head>

<body>
  <div>
    <div>
    @include('partials.navbar')
    
  </div>

    <main class="p-3">

      <hr class="mt-2">

      <div class="container">
        @yield('page_content')
      </div>
    </main>
  </div>

</body>

</html>