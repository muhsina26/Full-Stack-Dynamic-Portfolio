<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Muhsina')</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

  <nav>
    <div class="logo">Portfolio</div>
    <ul>
      <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
      <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
      <li><a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a></li>
      <li><a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
      <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Me</a></li>
    </ul>
  </nav>

  @yield('content')

 
  @if(request()->is('/'))
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  @endif
</body>
</html>