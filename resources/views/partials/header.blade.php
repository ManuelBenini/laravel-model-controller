<header>

    <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mb-nav-li {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                        <a class="nav-link mb-nav-a" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item mb-nav-li {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
                        <a class="nav-link mb-nav-a" href="{{route('about')}}">Chi siamo</a>
                    </li>

                    <li class="nav-item mb-nav-li {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}">
                        <a class="nav-link mb-nav-a" href="{{route('contacts')}}">Contatti</a>
                    </li>

                    <li class="nav-item mb-nav-li {{Route::currentRouteName() === 'movie' ? 'active' : ''}}">
                        <a class="nav-link mb-nav-a" href="{{route('movie')}}">Film</a>
                    </li>
                
                </ul>

            </div>

          

        </div>
        
    </nav>

    {{-- <form class="d-flex inputs" role="search">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>

    </form> --}}

</header>