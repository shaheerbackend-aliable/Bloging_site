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
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home.dashboard') }}">Home</a>
          </li>
          <li class="nav-item">
          @if(auth()->user())
            <a class="nav-link" href="{{ route('user.blog') }}">Blog</a>
            @else
            <a class="nav-link" href="{{ route('login') }}">Blog</a>
            @endif
          </li>



          
        </ul>
      </li>
    </ul>
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @if(auth()->user())
          @if (auth()->user()->role=='admin')
          <a href="{{ url('admin/dashboard') }}" class="font-semibold text-light text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
          <a href="{{ url('user/dashboard') }}" class="font-semibold text-light text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @endif
          @else
          <div class="auth-setter "  >
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color:#fff; text-decoration:none;">Log in</a>
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color:#fff; padding-left:3px; text-decoration:none"">Register</a>

          </div>
          @endif
        </div>
      </div>
    </div>
  </nav>


  <!-- end topbar content-->







  <!-- start social search section -->
  @include('user.search')
  <!-- endt social search section -->





  
  
  






  <!-- ==================start crauosal ================ -->





  @include('user.Craousal')

  
  <!-- ==================end crauosal ================ -->


  
  <!-- ==================start content ================ -->
  
  @include('user.Content')

  <!-- @foreach($list as $content)
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
  @endforeach -->


  <!-- ==================end content ================ -->

  <!-- footer start -->

  @include('user.Footer')

  <!-- footer End -->



  <!-- linking the js -->
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
</body>

</html>