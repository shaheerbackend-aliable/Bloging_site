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