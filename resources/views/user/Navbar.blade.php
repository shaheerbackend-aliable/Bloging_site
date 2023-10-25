


<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">NavBar</label>
      <ul  >
      <li><a class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Home</a></li>

        <li><a class="{{ request()->routeIs('user.blog') ? 'active' : '' }}" href="{{ route('user.blog') }}">Blog</a></li>

        <li><a href="#contact">Contact Us</a></li>
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




