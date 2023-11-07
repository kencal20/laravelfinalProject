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
                <table class="table table-striped ">
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>message</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    @foreach ($data as $appoint )

                    @endforeach
                    <tr>

                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->number}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger">CANCEL</a>
                            <br><br>
                            <a href="{{url('approved',$appoint->id)}}" class="btn btn-info">APPROVE</a>
                            <br><br>
                            <a href="{{url('emailview',$appoint->id)}}" class="btn btn-primary">Send Email</a>
                        </td>

                    </tr>

                </table>
            </div>

            <!-- content-wrapper ends -->

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