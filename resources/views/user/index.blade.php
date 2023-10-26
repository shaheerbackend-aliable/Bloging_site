<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog Site</title>
  @vite('resources/css/app.scss')
  <link rel="stylesheet" href="style.scss" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/ionicons.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color:#f5f5f5">
  @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif
  <!-- start topbar content -->

  @include('user.Navbar')
  
  
  
  <!-- end topbar content-->
  
  
  
  



  <!-- start social search section -->
  <div class="social">
    <div class="container-fluid px-md-5">
      <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
          <div class="row">
          <div class="col-md-6 text-center">
    <a class="navbar-brand text-large" href="{{ route('user.dashboard') }}">
        <span style="text-decoration: underline; font-size: 1.2em;">B</span>
        <span style="text-decoration: underline; font-size: 1.2em;">l</span>
        <span style="text-decoration: underline; font-size: 1.2em;">o</span>
        <span style="text-decoration: underline; font-size: 1.2em;">g</span>
        <span>&nbsp;</span>
        <span style="text-decoration: underline; font-size: 1.2em;">S</span>
        <span style="text-decoration: underline; font-size: 1.2em;">i</span>
        <span style="text-decoration: underline; font-size: 1.2em;">t</span>
        <span style="text-decoration: underline; font-size: 1.2em;">e</span>
    </a>
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



  @include('user.Craousal')



  <!-- ==================end crauosal ================ -->







  <!-- ====cards start== -->
  
  @include('user.cards')

<!-- ====cards end== -->

  <!-- ==================start content ================ -->



  @include('user.Content')




  <!-- ==================end content ================ -->

  <!-- -----------start footer============= -->

  <!-- Footer -->
  @include('user.Footer')

  <!-- Footer -->


  <!-- End of .container -->

  <!-- ----------end footer============= -->





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
</body>

</html>