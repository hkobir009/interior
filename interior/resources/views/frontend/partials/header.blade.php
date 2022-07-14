<header id="header-container">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar unsticky" id="navbar_top">
       <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Ober
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="justify-content-between collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav m-auto">
                <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="product.html">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('service')}}">Service</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('contact-us')}}">Contact us</a>
                </li>
             </ul>
             <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end">
                <li class="nav-item">
                   <a class="nav-link openBtn" onclick="openSearch()" aria-current="page" href="javascript:void(0)" id="openBtn"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link"><i class="fa-solid fa-basket-shopping"></i></a>
                </li>
                <!--             <li class="nav-item"><a href="#" class="nav-link">
                   <i class="fa-regular fa-folder-closed"></i>
                   </a></li>
                   <li class="nav-item">
                   <a href="#" class="nav-link"><i class="fa-regular fa-star"></i></a>
                   </li> -->
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   En
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">EN</a></li>
                      <li><a class="dropdown-item" href="#">BN</a></li>
                   </ul>
                </li>
             </ul>
          </div>
       </div>
    </nav>
    <div id="myOverlay" class="overlay">
       <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
       <div class="overlay-content">
          <form action="">
             <button type="submit"><i class="fa fa-search"></i></button>
             <input type="text" placeholder="Search.." name="search">
          </form>
          <p>Search for products by application, by material, by color or by texture</p>
       </div>
    </div>
 </header>