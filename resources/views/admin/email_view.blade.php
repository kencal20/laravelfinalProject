<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        option {
            color: black;
        }
        label{
            display: inline-block;
            width: 200px;
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
                <form action="{{url('sendemail',$data->id)}}" method="post" >
                    @csrf
                    <div style="padding: 15px;">
                        <Label>Greeting</Label>
                        <input type="text" style="color: black;" name="greeting" required="" />
                    </div>

                    <div style="padding: 15px;">
                        <Label>Body</Label>
                        <input type="text" style="color: black;" name="pbody" required="" />
                    </div>



                    <div style="padding: 15px;">
                        <Label>Action Text</Label>
                        <input type="text" style="color: black;" name="actiontext" required="" />
                    </div>
                    <div style="padding: 15px;">
                        <Label>Action Url</Label>
                        <input type="text" style="color: black;" name="actionurl" required="" />
                    </div>
                    <div style="padding: 15px;">
                        <Label>End Part </Label>
                        <input type="text" style="color: black;" name="endpart" required="" />
                    </div>
                    <input type="submit" class="btn btn-info" required="">

            </div>
            </form>
        </div>
    </div>

    @include('admin.scripts')


</body>

</html>