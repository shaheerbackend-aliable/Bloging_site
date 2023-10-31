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
<link rel="stylesheet" href="assets/css/shared/style.css">
<!-- endinject -->
<title>Update Blog</title>
<!-- Layout styles -->
<link rel="stylesheet" href="assets/css/demo_1/style.css">
<!-- End Layout styles -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />
<style>
    
</style>
</head>

<body>
@include('sweetalert::alert')
    <!-- navbar start -->
    @include('admin.navbar')
    <!-- navbar End -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper p-0">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Page Title Header Starts-->

                <!-- Page Title Header Ends-->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Data</h1>
                        <a href="{{ Route('admin.upload') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Upload A Blog</a>
                    </div>
                    <form action="{{ Route('admin.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write New Heading</label>
                            <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="heading" value="{{ $blog->heading }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text">{{ $blog->text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Blog</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text">{{ $blog->text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Any Image</label>
                            <img src="/post/{{ $blog->image }}" alt="No Image Found" class="text_color"
                                style="margin: auto;" height="70px" width="70px">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        </div>
                        <button type="submit" class="btn btn-success">Update Blog</button>
                    </form>
                </div>


                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            
            <!-- main-panel ends -->
        </div>
        @include('admin.footer')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>

</body>

</html>
