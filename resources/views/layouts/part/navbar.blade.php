<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid d-flex justify-content-between">
          <div>
            <a class="navbar-brand" href="/">Travel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          </div>

          <div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href="/booking">Package</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                  </li>
                  @if (Auth::check())
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle btn btn-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/profile">Profile</a></li>
                          <li><a class="dropdown-item" href="/profile/edit">Setting</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/logout">Logout</a></li>
                          </ul>
                      </li>
                  @else
                      <li class="nav-item">
                          <a href="/login" class="nav-link">Login</a>
                      </li>
                      <li class="nav-item">
                          <a href="/register" class="nav-link">Register</a>
                      </li>
                  @endif
                </ul>
              </div>
          </div>
        
        
      </div>
    </nav>
</header>