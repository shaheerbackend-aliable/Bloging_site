<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Site</title>
    @vite('resources/css/app.scss')

    <link rel="stylesheet" href="style.scss" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- start topbar content -->
    <nav id="navbar" class="">
      <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
          <!-- Logo Placeholder for Inlustration -->
          <a href="#home"><i class="fas fa-chess-knight"></i> Logo</a>
        </div>

        <!-- Navbar Links -->
        <ul id="menu">
          <li><a href="#home">Home</a></li>
          <!--
       -->
          <li><a href="#services">Services</a></li>
          <!--
       -->
          <li><a href="#about">About</a></li>
          <!--
       -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- Menu Icon -->
    <div class="menuIcon">
      <span class="icon icon-bars"></span>
      <span class="icon icon-bars overlay"></span>
    </div>

    <div class="overlay-menu">
      <ul id="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <!-- end topbar content-->







      <!-- start social search section -->
<div class="social">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-between">
      <div class="col-md-8 order-md-last">
        <div class="row">
          <div class="col-md-6 text-center">
            <a class="navbar-brand" href="index.html"
              >Logistica <span>Architecture Agency</span></a
            >
          </div>
          <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
            <form action="#" class="searchform order-lg-last">
              <div class="form-group d-flex">
                <input
                  type="text"
                  class="form-control pl-3"
                  placeholder="Search"
                />
                <button
                  type="submit"
                  placeholder=""
                  class="form-control search"
                >
                  <span class="fa fa-search"></span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="social-media">
          <p class="mb-0 d-flex">
            <a
              href="#"
              class="d-flex align-items-center justify-content-center"
              ><span class="fa fa-facebook"
                ><i class="sr-only">Facebook</i></span
              ></a
            >
            <a
              href="#"
              class="d-flex align-items-center justify-content-center"
              ><span class="fa fa-twitter"
                ><i class="sr-only">Twitter</i></span
              ></a
            >
            <a
              href="#"
              class="d-flex align-items-center justify-content-center"
              ><span class="fa fa-instagram"
                ><i class="sr-only">Instagram</i></span
              ></a
            >
            <a
              href="#"
              class="d-flex align-items-center justify-content-center"
              ><span class="fa fa-dribbble"
                ><i class="sr-only">Dribbble</i></span
              ></a
            >
          </p>
        </div>
      </div>
    </div>
  </div>

</div>
    <!-- endt social search section -->














<!-- ==================start crauosal ================ -->

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/14-1536x1152.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel</h5>
        <p>Traveling Cost: Tips for Affordable Adventures.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5-1536x1152.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image-2-1536x819.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- ==================end crauosal ================ -->





    <!-- linking the js -->
    <script src="main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
  </body>
</html>
