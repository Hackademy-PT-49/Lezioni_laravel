<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('posts.index')}}">Tutti i post</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrazione</a>
          </li>
          @endguest
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (auth()->user()->is_admin)
              
              <li><a class="dropdown-item" href="{{route('newsletter.form')}}">Newsletter</a></li>
              <li><a class="dropdown-item" href="{{route('posts.dashboard')}}">Dashboard Post</a></li>
                  
              @endif


              <li><hr class="dropdown-divider"></li>
              <li><form class="dropdown-item" action="/logout" method="post">@csrf<button type="submit">Logout</button></form></li>
            </ul>
          </li>
          @endauth
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>