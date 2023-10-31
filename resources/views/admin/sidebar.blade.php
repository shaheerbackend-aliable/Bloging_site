

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                    <a href="{{Route('admin.dashboard')}}" class="nav-link">
                        Admin Panel
                    </a>
                    </li>
                    <li class="nav-item nav-category">Main Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('admin.dashboard')}}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('admin.blog')}}">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">All Blogs</span>
                        </a>
                    </li>
              
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="{{Route('admin.upload')}}" aria-expanded="false"
                            aria-controls="auth">
                            <i class="menu-icon typcn typcn-document-add"></i>
                            <span class="menu-title">Upload Blog</span>
                        </a>

                    </li><li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="{{Route('admin.subscriber')}}" aria-expanded="false"
                            aria-controls="auth">
                            <i class="menu-icon typcn typcn-document-add"></i>
                            <span class="menu-title">Subscriber Data</span>
                        </a>

                    </li>
                    
                </ul>
            </nav>

