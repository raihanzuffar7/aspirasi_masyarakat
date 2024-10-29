<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Aspirasi Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">Dashboard</a>
          </li>
        </ul>
        @guest  
        <ul class="navbar-nav ms-auto">
            <a class="nav-link" href="/login"> <img src="https://1.bp.blogspot.com/-NsmOMU-MY7I/XYj1RXKnjwI/AAAAAAAABqA/EVbu5Us42YU_szGFb-lm0c4tTnPd0OMGwCNcBGAsYHQ/s320/Logo-Provinsi-DKI-Jakarta.png" alt="" width="60" height="60" ></a>    
        </ul>
        @else
        <ul class="navbar-nav ms-auto">
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-light" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </ul>
        @endguest
      </div>
    </div>
  </nav>