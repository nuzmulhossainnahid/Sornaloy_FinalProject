<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="user/logo/logo.png" rel="icon">
    <title>Sornaloy- Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/css/style.css">
    <!-- endinject -->
    <!-- endinject -->
    <link rel="shortcut icon" href="admin/images/favicon.png" />
    <link rel="shortcut icon" href="http://www.urbanui.com/" />


</head>


<body>
<div class="container-scroller">
    {{-- Navbar --}}
    @include('admin.include.navbar')

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
    @include('admin.include.exta')
    <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
    @include('admin.include.slider')

    <!-- Main -->
        <div class="main-panel">

            @if (session()->has('message'))
                <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold">
                                {{$bankName}}
                            </h4>
                        <form class="forms-sample" action="{{ url('schedulfrom_bank') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" value="{{$bankName}}" name="bankName">


                            <div class="form-group">
                                <label for="exampleInputName1"  style="font-weight: bold" style="font-weight: bold">Bank Name</label>

                                <select class="form-control" name="branch" id="exampleFormControlSelect2">
                                    @foreach ($data as $data)
                                        <option value="{{$data->branch}}">{{$data->branch}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1"  style="font-weight: bold" style="font-weight: bold">Date</label>
                                <input type="date" name="date" class="form-control" id="exampleInputPassword4">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1"  style="font-weight: bold" style="font-weight: bold">Time</label>
                                <select class="form-control" name="time" id="exampleFormControlSelect2">

                                        <option value="11 - 12 AM">11 - 12 AM</option>
                                        <option value="02 - 03 PM">02 - 03 PM</option>
                                        <option value="03 - 04 PM">03 - 04 PM</option>

                                </select>

                            </div>



                            <div class="form-group">
                                <label for="exampleInputName1"  style="font-weight: bold" style="font-weight: bold">Assign Employ</label>
                                <select class="form-control" name="Assign_Employ" id="exampleFormControlSelect2">

                                    @foreach($Assign_Employ as $Assign_Employ)
                                    <option value="{{$Assign_Employ->id}}">{{$Assign_Employ->id}} -- {{$Assign_Employ->name}}</option>
                                    @endforeach


                                </select>

                            </div>




                            {{--<div class="form-group">--}}
                            {{--<label for="exampleInputEmail3" style="font-weight: bold">Branch</label>--}}


                            {{--<select name="branch" id="branch" class="form-control input-lg dynamic" data-dependent="branch">--}}
                            {{--<option value="">Select State</option>--}}
                            {{--</select>--}}


                            {{--<select class="form-control" name="" id="exampleFormControlSelect2">--}}
                            {{--@foreach ($branch as $branch)--}}
                            {{--<option value="{{$branch->branch}}">{{$branch->branch}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="exampleInputPassword4" style="font-weight: bold">Address</label>--}}
                            {{--<input type="text" name="address"  value="" class="form-control" id="exampleInputPassword4">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="exampleSelectGender" style="font-weight: bold">Working Hours</label>--}}
                            {{--<select class="form-control" name="working_hours" id="exampleFormControlSelect2">--}}
                            {{--<option>10AM-05PM</option>--}}
                            {{--<option>09AM-04PM</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}

                            <button type="submit" style="background-color: green" class="btn btn-primary form-control">Submit</button>


                        </form>
                    </div>
                </div>
            </div>





        </div>



        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('admin.include.script')
</body>


</html>
