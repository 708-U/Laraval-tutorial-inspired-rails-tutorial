<!DOCTYPE html>
<html>
  <head>
    @include('partials.layout.laravel_default')
    @include('partials.layout.shim')
  </head>
    <body>
      @include('partials.layout.header')
      <div class="container">
        @yield('body')
        @include('partials.layout.footer')
      </div>
    </body>
</html>
