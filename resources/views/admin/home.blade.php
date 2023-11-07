<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
  @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->

            @include('admin.main')
            <!-- content-wrapper ends -->
            @include('admin.footer')
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
    <!-- endinject -->
    <!-- Custom js for this page -->
   @include('admin.scripts')
    <!-- End custom js for this page -->
</body>

</html>