<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog Site</title>
  @vite('resources/css/app.scss')
  <link rel="stylesheet" href="style.scss" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <!-- start topbar content -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
              <hr class="dropdown-divider">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                     this.closest('form').submit();"> 
                     Logout </a></li>
              </form>
              <li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">

          <button class="btn text-light" type="submit">Subscribe</button>
        </form>
      </div>
    </div>
  </nav>


  <!-- end topbar content-->







  <!-- start social search section -->
  <div class="social">
    <div class="container-fluid px-md-5">
      <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
          <div class="row">
            <div class="col-md-6 text-center">
              <a class="navbar-brand" href="index.html">Logistica <span>Architecture Agency</span></a>
            </div>
            <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
              <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                  <input type="text" class="form-control pl-3" placeholder="Search" />
                  <button type="submit" placeholder="" class="form-control search">
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
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
              <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> -->
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
        <img src="https://stelary.themewant.com/travel/wp-content/uploads/2023/08/14-1536x1152.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Travel</h5>
          <p>Traveling Cost: Tips for Affordable Adventures.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://stelary.themewant.com/travel/wp-content/uploads/2023/08/14-1536x1152.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://stelary.themewant.com/travel/wp-content/uploads/2023/08/14-1536x1152.jpg" class="d-block w-100" alt="...">
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



  <!-- ==================start content ================ -->


  @foreach($list as $content)
  <div class="content-section">

    <div class="row">
      <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 content-1">
        <h4>Travel</h4>
        <p>{{$content->heading}}</p>
        <div class="content-img">
          <img src="/post/{{$content->image}}" alt="">
        </div>



        <div class="auth-td">
          <div class="date-time">
            By <span>DANY</span>

            on <span>{{$content->created_at}}</span>
          </div>
          <p>{{$content->text}}</p>
          <div class="continue-reading">
            <button type="button" class="btn">CONTINUE READING</button>
          </div>
        </div>







      </div>

      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 cards">
        <h4>About Me</h4>
        <div class="card" style="width: 18rem;">
          <img src="https://stelary.themewant.com/travel/wp-content/uploads/2023/08/14-1536x1152.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">DANI NISI</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
          <div class="card-body cards-body">
            <a href="#" class="card-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="card-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="card-link"><i class="fab fa-instagram"></i></a>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endforeach


  <!-- ==================end content ================ -->





  <!-- linking the js -->
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
</body>

</html>