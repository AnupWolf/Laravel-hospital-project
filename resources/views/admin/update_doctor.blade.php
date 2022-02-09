<!DOCTYPE html>
<html lang="en">

<style>
label {
    display: inline-block;
    width: 200px;
}
</style>

<head>
    <!-- Required meta tags -->
    <base href="/public">

    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <div class="container text-center" style="padding-top:100px">

                @if (session()->has('message'))

                <div class="alert alert-success">

                    {{session()->get('message')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <button type="button" class="btn-close" aria-label="Close">
                        x
                    </button>

                </div>

                @endif

                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="write the name of the doctor"
                            value="{{$data->name}}" required="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Phone</label>
                        <input type="number" style="color:black;" name="phone" placeholder="write the number"
                            value="{{$data->phone}}" required="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Speciality</label>
                        <input type="text" style="color:black;" name="speciality" value="{{$data->speciality}}">
                    </div>

                    <div style=" padding:15px">
                        <label for="">Room No</label>
                        <input type="text" style="color:black;" name="room" placeholder="write the room number"
                            value="{{$data->room}}" required="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Doctor Old Image</label>
                        <img height="80" width="80" src="doctorimage/{{$data->image}}" alt="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Change Doctor Image</label>
                        <input type="file" name="file" required="" value="{{$data->image}}">
                    </div>

                    <div style="padding:15px">
                        <input type="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>

</html>