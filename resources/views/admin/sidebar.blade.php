


<style>
    .sidebar {
        width: 250px;
        transition: transform 0.3s ease;
    }

    .sidebar.sidebar-hidden {
        transform: translateX(-100%);
    }

    .toggle-btn {
        display: none;
    }

    @media (max-width: 1024px) {
        .toggle-btn {
            display: none;
        }
    }

    @media (max-width: 991px) {
        .toggle-btn {
            display: block;
            position: fixed;
            top: 25px;
            left: 20px;
            z-index: 9999;
            cursor: pointer;
        }
    }


</style>




    <div class="toggle-btn">
        <button id="menu-toggle" class="btn btn-primary menu-toggle-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </div>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
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


            <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("menu-toggle");
            const sidebar = document.getElementById("sidebar");

            if (menuToggle && sidebar) {
                menuToggle.addEventListener("click", function () {
                    sidebar.classList.toggle("sidebar-hidden");
                });
            }
        });
    </script>