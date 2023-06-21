<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container">
    <a class="navbar-brand" href="/">MyPortfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ $title == "blog" ? "active" : "" }}" href="/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $title == "about" ? "active" : "" }}" href="/about">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $title == "categories" ? "active" : "" }}" href="/categories">Categories</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      @auth
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        welcome back {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2"></i>My Dashboard</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
        <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="dropdown-item">
          <i class="bi bi-person-dash"></i>Logout
        </button>
        </form>
        </li>
        </ul>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link active" href="/dashboard"><i class="bi bi-grid-1x2"></i>My Dashboard</a>
      </li>
      <li class="nav-item">
        <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link active bg-warning border-0">
          <i class="bi bi-person-dash"></i>Logout
        </button>
        </form>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link active" href="/login"><i class="bi bi-arrow-bar-right"></i> Login</a>
      </li>
      @endauth
    </ul>
  </div>
  </div>
</nav>