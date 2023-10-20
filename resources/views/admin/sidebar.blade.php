<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BLOG SITE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Panal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- User Data -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="{{Route('admin.dashboard')}}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>User Data</span>
                </a>
            </li>

            <!--Upload Blog -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{Route('admin.upload')}}" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Upload Blog</span>
                </a>
            </li>
        </ul>