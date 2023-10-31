<!-- partial:../../partials/_navbar.html -->

<!-- partial -->
<div class="container-fluid page-body-wrapper p-0">
    <!-- partial:../../partials/_sidebar.html -->

    <!-- partial -->

        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 col-sm-12  stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Data</h4>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->

            <!-- partial -->
        </div>
        {{-- @include('admin.footer') --}}

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../assets/js/shared/off-canvas.js"></script>
<script src="../../assets/js/shared/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
<!-- End custom js for this page-->
</body>

</html>