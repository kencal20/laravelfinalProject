<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            padding-top: 30px;
        }
    </style>
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
        
            <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @if(session()->has('message'))
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
            @endif
                <div class="container" align="center">

                    <label for="">Doctor Name</label>
                    <input type="text" name='name' value="{{$data->name}}" style="color:black">
                    <br>

                    <label for="">Doctor Phone</label>
                    <input type="number" name='number' value="{{$data->phone}}" style="color:black">
                    <br>

                    <label for="">Doc Specialty</label>
                    <input type="text" name='specialty' value="{{$data->specialty}}" style="color:black">
                    <br>

                    <label for="">Doctor Room</label>
                    <input type="text" name='room' value="{{$data->room}}" style="color:black">
                    <br><br>
                    <input type="submit" class="btn btn-primary">
            </form>
        </div>



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