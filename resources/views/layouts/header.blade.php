<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PAROKI PALUR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('streaming') }}">Live Streaming</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('jadwalmisa') }}">Jadwal Misa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('news') }}">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('admin') }}">Admin</a>
          </li> --}}
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <a class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        
      </div>
    </div>
  </nav>