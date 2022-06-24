<header>
    <ul class="nav">
        <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
          <a class="nav-link" href="{{route('home')}}">Homepage</a>
        </li>
        <li class="nav-item {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
          <a class="nav-link" href="{{route('about')}}">Chi siamo</a>
        </li>
        <li class="nav-item {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}">
          <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        </li>
        <li class="nav-item {{Route::currentRouteName() === 'movie' ? 'active' : ''}}">
          <a class="nav-link" href="{{route('movie')}}">Film</a>
        </li>
    </ul>
</header>