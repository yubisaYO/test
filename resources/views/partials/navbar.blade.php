<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Charles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($active === "home") && 'active' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "about") && 'active' ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "blog") && 'active' ? 'active' : ''}}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "categories") && 'active' ? 'active' : ''}}" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
      @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>Logout</button></form></li>
          </ul>
        </li>
        </ul>
      @else
          <li class="nav-item ms-auto">
            <a class="nav-link"  href="/login"><i class="bi bi-box-arrow-in-right"></i>login</a>
          </li>
      @endauth
        </ul>
    </div>
  </div>
</nav>
