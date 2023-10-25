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

<body>
  @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif
  <!-- start topbar content -->

  @include('user.Navbar')



  <!-- end topbar content-->







  <!-- start social search section -->
  @include('user.search')
 
  <!-- endt social search section -->














  <!-- ==================start crauosal ================ -->



  @include('user.Craousal')



  <!-- ==================end crauosal ================ -->



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