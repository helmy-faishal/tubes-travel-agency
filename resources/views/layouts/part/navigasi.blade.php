<section id="navigasi">
  <nav class="navbar fixed-top navbar-expand-lg navbar-nav-scroll">
    <div class="container-fluid">
      <div class="LOGO">
        <a class="navbar-brand" href="/" style="padding-left: 15%;"><img src="{{asset('MilleniumTravelAgency/Home/Millennium.png')}}" alt="Millennium Agency"></a>
      </div>
      <div style="margin-right: 2%;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav me-2 mb-2 mb-lg-0">
            <li>
              <a class="nav-link borderA this" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link borderA" href="D:\Semester 6\ABP\Millennium Travel Agency\PaketWisata\paketWisata.html">Paket Wisata</a>
            </li>
            <li>
              <a class="nav-link borderA" href="D:\Semester 6\ABP\Millennium Travel Agency\TravelBlog\travelBlog.html">Travel Blog</a>
            </li>
            <li>
              <a class="nav-link" href="D:\Semester 6\ABP\Millennium Travel Agency\Kontak\kontak.html">Kontak</a>
            </li>
            @if (Auth::check())
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/profile/edit">Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                  <a href="/profile" class="nav-link">{{Auth::user()->username}}</a>
              </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li>
            @endif
        </div>
      </div>
    </div>
  </nav>
</section>