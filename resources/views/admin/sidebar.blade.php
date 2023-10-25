
<style>
        /* CSS for hiding the sidebar by default and showing it when not hidden */
        .sidebar {
            width: 250px; /* Adjust the width to your desired sidebar width */
            transition: transform 0.3s ease;
        }

        .sidebar.sidebar-hidden {
            transform: translateX(-100%);
        }

        /* Style for the menu toggle button */
        .toggle-btn {
            /* Initially hide the button */
            display: none;
        }

        .side-bar{display: block;}
        /* Media query to show the button on screens with max-width 1024px */
        @media (max-width: 1024px) {

            
            .toggle-btn {
                display: block;
                position: fixed;
                top: 10px;
                left: 10px;
                z-index: 9999;
                cursor: pointer;
            }
        }
    </style>


    <div class="toggle-btn">
        <button id="menu-toggle" class="btn btn-primary menu-toggle-button">Toggle Sidebar</button>
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

                    </li>
                    
                </ul>
            </nav>


            <script>
        // JavaScript function to toggle the sidebar
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