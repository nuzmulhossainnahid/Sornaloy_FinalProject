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
                        <h4 class="card-title">Create  Slider</h4>
                        <form class="forms-sample" action="{{ url('edit_employ_user',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">ID</label>
                                <input type="text" class="form-control" name="id" value="{{$data->id}}" readonly id="exampleInputName1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" id="exampleInputEmail3">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control" id="exampleInputPassword4">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputPassword4">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$data->address}}" id="exampleInputEmail3">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">usertype</label>
                                <input type="text" name="usertype" value="{{$data->usertype}}" class="form-control" id="exampleInputPassword4">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">profile_photo_path</label>
                                <img src="EmployImage/{{ $data->profile_photo_path }}" style="height: 120px;width: 240px;" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">profile_photo_path</label>
                                <input type="file" name="profile_photo_path" value="{{$data->profile_photo_path}}" class="form-control" id="exampleInputPassword4">
                            </div>

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
