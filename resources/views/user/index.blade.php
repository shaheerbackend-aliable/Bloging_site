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
  <!-- start topbar content -->

  
  <nav class="navbar navbar-fixed navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand my-3"  href="#">BLOG SITE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('user.blog')}}">Blog</a>
          </li>
          <div id="contact-us">

            <li class="nav-item">
              <a class="nav-link " href="#footer" tabindex="-1" aria-disabled="true">Contact Us</a>
            </li>
          </div>
         
        </ul>

          <div class="nav-item dropdown text-light mx-4 ">
            <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-dark" href="{{route('profile.edit')}}">Profile</a></li>
              <hr class="dropdown-divider">
              <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
                <li><button class="dropdown-item text-dark"  onclick="document.getElementById('logoutForm').submit()"> 
                     Logout </button></li>
              

              </form>
              <li>
            </ul>
          </li>
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



  <div id="slider">
    <div class="slide" style="background:dodgerBlue;">
      <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" >
    </div>

    <div class="slide" style="background:coral;">
       <img src="https://wallpapercave.com/wp/wp2634222.jpg" >
    </div>

    <div class="slide" style="background:crimson;">
      <img src="https://wallpaperaccess.com/full/1154341.jpg" >
    </div>

    <div class="slide" style="background: #6edf10;">
      <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" >
    </div>

    <!--Controlling arrows-->
    <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
  </span>
    <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
  </span>
  </div>
    <div id="dots-con">
   <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
   </div>

  

  <!-- ==================end crauosal ================ -->



  <!-- ==================start content ================ -->


  @foreach($list as $content)
  <!-- <div class="content-section">

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
            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's
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
  </div> -->


  <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="/post/{{$content->image}}" title="" alt="">
                        </div>
                        <div class="article-title">
                            <h6><a href="#"></a></h6>
                            <h2>{{$content->heading}}</h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="/post/{{$content->image}}" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label>Rachel Roth</label>
                                    <span>{{$content->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>{{$content->text}}</p>
                            <p>{{$content->text}}</p>
                            <h4>{{$content->heading}}</h4>
                            <p>{{$content->text}}</p>
                            <blockquote>
                                <p>{{$content->text}}</p>
                                <p class="blockquote-footer">{{$content->text}}<cite title="Source Title">{{$content->text}}</cite></p>
                            </blockquote>
                            <p>{{$content->text}}</p>
                        </div>
                        <div class="nav tag-cloud">
                            <button class="btn btn-primary">Like</button>
                          
                        </div>
                    </article>
                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside py-3">
                    <!-- Author -->
                    <div class="card" >
  <img src="/post/{{$content->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Author</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>

                    <!-- End Author -->
                    <!-- Trending Post -->
                    <div class="widget widget-post">
                        <div class="widget-title">
                            <h3>Trending Now</h3>
                        </div>
                        <div class="widget-body">

                        </div>
                    </div>
                    <!-- End Trending Post -->
                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="widget-body">
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="/post/{{$content->image}}" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="/post/{{$content->image}}" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="/post/{{$content->image}}" title="" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Latest Post -->
                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Latest Tags</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Travel</a>
                                <a href="#">Web Design</a>
                                <a href="#">Marketing</a>
                                <a href="#">Research</a>
                                <a href="#">Managment</a>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->
                </div>
            </div>
        </div>
    </div>
  @endforeach


  <!-- ==================end content ================ -->

<!-- -----------start footer============= -->

  <!-- Footer -->
<footer class="bg-dark text-center text-white p-0 " id=footer>
  <!-- Grid container -->
  <div class="container p-3">
    <!-- Section: Social media -->
    <section class="mb-3">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
  
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-2" style="background-color:#02624f;">
    © 2020 Copyright:
    <a class="text-white" href="#">Blog Site</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  

<!-- End of .container -->

<!-- ----------end footer============= -->



 
   



<script type="text/javascript">
var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){

  if(index>slides.length-1)
    index=0;

  if(index<0)
    index=slides.length-1;



    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";

      dots[i].classList.remove("active");


    }

    slides[index].style.display = "block";
    dots[index].classList.add("active");



}









  // Function to smoothly scroll to the target element
  function scrollToElement(targetElement) {
    window.scrollTo({
      behavior: 'smooth',
      top: targetElement.offsetTop,
    });
  }

  const contactUsLink = document.querySelector('a[href="#footer"]');
  if (contactUsLink) {
    contactUsLink.addEventListener('click', function (e) {
      e.preventDefault();
      const footerElement = document.getElementById('footer');
      if (footerElement) {
        scrollToElement(footerElement);
      }
    });
  }


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
</body>

</html>