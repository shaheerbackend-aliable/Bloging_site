<!DOCTYPE html? ?html lang=?en?? <head>
<!-- Required meta tags --?
    ?meta charset=?utf-8??
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
-->

<link rel="stylesheet" href="adminstyle.scss" />
<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
<link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
@vite('resources/css/app.scss')
<link rel="stylesheet" href="adminstyle.scss" />
<link rel="stylesheet" href="admin2.scss" />
<link rel="stylesheet" href="style.scss" />
<title>Admin Panel</title>

<!-- End Layout styles -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>

    <!-- navbar start -->
    <!-- @include('admin.navbar')-->

    @include('admin.navbar')
    <!-- navbar End -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Page Title Header Starts-->

                <!-- Page Title Header Ends-->
                @include('admin.table')


                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
@include('admin.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
   


   
</body>

</html>