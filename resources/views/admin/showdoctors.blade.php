<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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

            <div style="width:65vw;margin-top:40px;">
                <table class="table table-bordered text-center table-striped
                     ">
                    <tr class="text-light bg-primary">
                        <th>Doctor Name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room no</th>
                        <th>Doctor Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $doctor)
                    <tr class="text-dark bg-light">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="500" width="400" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a class="btn btn-success" href="{{url('update_doctor',$doctor->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>


        @include('admin.script')
    </div>
</body>

</html>