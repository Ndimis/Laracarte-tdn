<nav class="navbar navbar-expand-lg static-top navbar-dark bg-secondary" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Laracarte</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Planet</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
            <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
            <li><a class="dropdown-item" href="https://laracasts.com">laracasts</a></li>
            <li><a class="dropdown-item" href="https://larajobs.com">larajobs</a></li>
            <li><a class="dropdown-item" href="https://laravel-news.com">lara News</a></li>
             <li><a class="dropdown-item" href="https://larachat.com">larachat</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>