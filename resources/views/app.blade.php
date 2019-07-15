<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title') | Laravel Tutorial Sample App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js">
      </script>
    <![endif]-->
  </head>
    <body>
      <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <a href="{{ route('home') }}" id='logo'>Sampe App</a>
        <nav>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('help') }}">Help</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
      </header>
      <div class="container">
        @yield('body')
      </div>
    </body>
</html>
