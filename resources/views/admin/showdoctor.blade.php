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


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div>
                <table class="table table-striprd">
                    <tr>
                        <th>Doctor name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room Number</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $doctor )


                    <tr>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->number}}</td>
                        <td>{{$doctor->specialty}}</td>
                        <td>{{$doctor->room}}</td>
                        <td>
                            <a href="{{url('deletedoctor', $doctor->id)}}" onclick="return confirm('Are you sure you want to delete {{$doctor->name}} from {{$doctor->specialty}}')" class="btn btn-danger">Delete</a>
                            <a href="{{url('updatedoctor', $doctor->id)}}" class="btn btn-success">Update</a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>


            <!-- content-wrapper ends -->


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