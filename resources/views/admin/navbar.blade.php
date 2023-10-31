
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#415bf2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
      
      <ul class="navbar-nav d-lg-none d-block  mx-auto mb-2 mb-lg-0">
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

<style>
  .navbar .navbar-collapse.show{
    background: #415bf2;
    z-index: 999;
  }
</style>