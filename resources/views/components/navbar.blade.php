<header class="header bg-dark" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        {{-- <img src="./assets/images/logo.svg" alt="Ridex logo"> --}}
        <i class="fa fa-car fa-2xl text-white"></i>
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link text-white " style="text-decoration: none;" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#featured-car" class="navbar-link text-white" style="text-decoration: none;" data-nav-link>Explore cars</a>
          </li>

          <li>
            <a href="#" class="navbar-link text-white" style="text-decoration: none;" data-nav-link>About us</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link text-white" style="text-decoration: none;" data-nav-link>Blog</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">

     

        <a href="#featured-car" class="btn text-white" aria-labelledby="aria-label-txt">
          <ion-icon name="car-outline"></ion-icon>

          <span id="aria-label-txt">Explore cars</span>
        </a>

      

        <div class="dropdown">
            <a href="#" class="btn user-btn dropdown-toggle text-white" aria-label="Profile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i>
              </a> 
         
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-heart"></i> Favorites</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-right-to-bracket"></i> Login</a></li>
            </ul>
          </div>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>

    </div>
  </header>