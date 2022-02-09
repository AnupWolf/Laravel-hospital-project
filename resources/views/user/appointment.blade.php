<div class="page-section ">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input name="name" type="text" class="form-control" placeholder="Full name" required="">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input name="email" type="text" class="form-control" placeholder="Email address.." required="">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input name="date" type="date" class="form-control" required="">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" class="custom-select" required="">
                        <option value="">-- Select Doctor --</option>
                        @foreach($doctor as $doctors)

                        <option value="{{$doctors->name}}">{{$doctors->name}}--speciality--{{$doctors->speciality}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input name="number" type="text" class="form-control" placeholder="Number.." required="">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" class="form-control" rows="6" placeholder="Enter message.."
                        required=""></textarea>
                </div>

            </div>

            <button type="Submit" class="btn bg-primary btn-primary  mt-3 wow ZoomIn">Submit Request</button>

        </form>
    </div>
</div>