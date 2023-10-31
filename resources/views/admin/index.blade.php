<!DOCTYPE html>
<head>

<title>Admin Panel</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


@vite('resources/css/app.scss')

<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>

    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper p-0">
        @include('admin.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @include('admin.table')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            @include('admin.footer')
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