


<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">NavBar</label>
      <ul  >
        <li><a class="active" href="{{Route('user.dashboard')}}">Home</a></li>
        <li><a href="{{Route('user.blog')}}">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class=" profiles text-light ">
          <a class=" dropdown-toggle   " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
            <hr class="dropdown-divider">

            <li>  <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
                <li><button class="dropdown-item text-dark "  onclick="document.getElementById('logoutForm').submit()"> 
                     Logout </button></li>
              

              </form></li>
            
          </ul>
        </li>
      </ul>
    </nav>
    <!-- <section></section> -->






<!-- 
  <script>












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


</script> -->