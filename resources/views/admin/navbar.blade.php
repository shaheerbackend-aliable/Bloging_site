<nav class="navbar p-0" style="background-color: #415bf2">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Panel</a>
        <button class="navbar-toggler btn btn-sm d-lg-none d-block" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav-item dropdown d-lg-block d-none">
            <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu  pr-4">
                <li>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile
                    </a>
                </li>
                <li>

                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                        @csrf
                        <button class="dropdown-item text-dark"
                            onclick="document.getElementById('logoutForm').submit()">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>


        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background-color: #415bf2">
                <ul class="navbar-nav position-static " style="background-color: #415bf2">
                    <li class="nav-item ">
                        <a class="nav-link text-light" active" aria-current="page" href="#">Home

                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class ="nav-link text-light" href="#">Link

                        </a>
                    </li>
                    <li class="nav-item  dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu position-sticky " style="    height: 54vh;
                        width: 50%;">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile
                                </a>
                            </li>

                            <hr class="dropdown-divider">

                            <li>
                                <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                    @csrf
                                    <button class="dropdown-item text-dark"
                                        onclick="document.getElementById('logoutForm').submit()">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
