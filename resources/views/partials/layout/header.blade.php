{{-- bootstrap4からfixed-topの指定が変わった rails tutorial側では古い指定なので注意--}}
<header class="navbar navbar-light bg-dark fixed-top navbar-expand-lg">
  <div class="container">
    <a href="{{ route('home') }}" id='logo'>Sample App</a>
    <nav>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('help') }}">Help</a></li>
      <li><a href="#">Log in</a></li>
      </ul>
    </nav>
  </div>
</header>
