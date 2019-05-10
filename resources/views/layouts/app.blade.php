<!-- Stored in resources/views/layouts/app.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <nav class="navbar bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Task List</a>
      </div>
    </nav>

    @yield('content')

    <!-- App JS -->
    <script src="js/app.js"></script>
  </body>
</html>
