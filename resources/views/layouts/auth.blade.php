<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Authentication')</title>

  <!-- Optional: Link your CSS files here -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

  @stack('styles')
</head>
<body style="background-color: #f5f7fa; font-family: Arial, sans-serif;">

  <main>
    @yield('content')
  </main>

</body>
</html>
