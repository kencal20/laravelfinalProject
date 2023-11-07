<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        option {
            color: black;
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


        <!-- content-wrapper ends -->
        <div class="container-fluid page-body-wrapper">



            <div class="container" align='center' style="padding-top: 50px;">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <Label>Doctor Name:</Label>
                        <input type="text" style="color: black;" name="name"  required=""/>
                    </div>

                    <div style="padding: 15px;">
                        <Label>Doctor phone:</Label>
                        <input type="number" style="color: black;" name="phone" required="" />
                    </div>

                    <div style="padding: 15px; ">
                        <Label> Doc. speciality:</Label>
                        <select style="color: black;" name="specialty" required="">
                            <option>--Select--</option>
                            <option value="cadio Surgeon">cadio Surgeon</option>
                            <option value="General Medicine">General Medicine</option>
                            <option value="Neourosurgery">Neourosurgery</option>
                            <option value="Neourologist">Neourologist</option>
                            <option value="Plastic Surgeon">Plastic Surgeon</option>
                            <option value="Pediatric surgery">Pediatric surgery</option>Trauma surgery
                            <option value="Trauma surgery">Trauma surgery</option>
                        </select>

                    </div>

                    <div style="padding: 15px;">
                        <Label>Room Number:</Label>
                        <input type="text" style="color: black;" name="room" required="" />
                    </div>

                    <input type="submit" class="btn btn-info" required="">

            </div>
            </form>
        </div>
    </div>

    @include('admin.scripts')


</body>

</html>