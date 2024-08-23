<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}" style="margin-right: 90px">
        <img src="{{ asset('assets/images/white.png') }}" alt="logo" width="200" height="30" class="d-inline-block align-text-top" style="margin: 20px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Women's
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Shop All</a></li>
              <li><a class="dropdown-item" href="#">T-shirt</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="#">Polos</a></li>
              <li><a class="dropdown-item" href="#">Crop Tops</a></li>
              <li><a class="dropdown-item" href="#">Tank Tops</a></li>
              <li><a class="dropdown-item" href="#">Leggings</a></li>
              <li><a class="dropdown-item" href="#">Skirts</a></li>
              <li><a class="dropdown-item" href="#">Shorts</a></li>
              <li><a class="dropdown-item" href="#">Hoodies & Jackets</a></li>
              <li><a class="dropdown-item" href="#">Joggers & Pants</a></li>
              <li><a class="dropdown-item" href="#">One Piece</a></li>
              <li><a class="dropdown-item" href="#">Sports Bra</a></li> 
              <li><a class="dropdown-item" href="#">Underwear</a></li>
              <li><a class="dropdown-item" href="#">Collection</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Men's
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Shop All</a></li>
              <li><a class="dropdown-item" href="#">T-shirt</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="#">Polos</a></li>
              <li><a class="dropdown-item" href="#">Tank Tops</a></li>
              <li><a class="dropdown-item" href="#">Shorts</a></li>
              <li><a class="dropdown-item" href="#">Hoodies & Jackets</a></li>
              <li><a class="dropdown-item" href="#">Joggers & Pants</a></li>
              <li><a class="dropdown-item" href="#">Compressions</a></li>
              <li><a class="dropdown-item" href="#">Underwear</a></li>
              <li><a class="dropdown-item" href="#">Collection</a></li>
            </ul>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accessories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Shop All</a></li>
              <li><a class="dropdown-item" href="#">Jewellery</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="#">Hats & Caps</a></li>
              <li><a class="dropdown-item" href="#">Slides</a></li>
              <li><a class="dropdown-item" href="#">Socks</a></li>
              <li><a class="dropdown-item" href="#">Bags</a></li>
              <li><a class="dropdown-item" href="#">Bottles & Tumblers</a></li>
              <li><a class="dropdown-item" href="#">Lifting Accessories</a></li>
              <li><a class="dropdown-item" href="#">Carnag Merch</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gift Card</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>