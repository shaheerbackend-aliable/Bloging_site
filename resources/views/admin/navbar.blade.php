<!-- <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href=""></a></label>
      <ul>
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
    </nav>  -->














    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('user.dashboard') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link {{ request()->routeIs('user.blog') ? 'active' : '' }}" href="{{ route('user.blog') }}">Blog</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#contact" aria-disabled="true">Contact Us</a>
        </li>
      </ul>

      <div class="nav-item dropdown m-3">
        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
       
        <ul class="dropdown-menu pr-4">
          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
          <hr class="dropdown-divider">
          <li>
            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
              @csrf
              <button class="dropdown-item text-dark" onclick="document.getElementById('logoutForm').submit()">
                Logout
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
