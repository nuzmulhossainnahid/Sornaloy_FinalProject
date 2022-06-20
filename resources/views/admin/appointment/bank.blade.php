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
                        <h4 class="card-title" style="font-weight: bold">Create  Bank</h4>
                        <form class="forms-sample" action="{{ url('bank_app_from') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1"  style="font-weight: bold" style="font-weight: bold">Bank Name</label>

                                <select class="form-control" name="bankName" id="exampleFormControlSelect2">
                                    <option value="AB Bank Limited.">AB Bank Limited.</option>
                                    <option value="Bangladesh Commerce Bank Limited.">Bangladesh Commerce Bank Limited.</option>
                                    <option value="Bank Asia Limited.">Bank Asia Limited.</option>
                                    <option value="Bengal Commercial bank ltd.">Bengal Commercial bank ltd.</option>
                                    <option value="BRAC Bank Limited.">BRAC Bank Limited.</option>
                                    <option value="Citizens Bank PLC.">Citizens Bank PLC.</option>
                                    <option value="City Bank Limited.">City Bank Limited.</option>
                                    <option value="Community Bank Bangladesh Limited.">Community Bank Bangladesh Limited.</option>
                                    <option value="Dhaka Bank Limited.">Dhaka Bank Limited.</option>
                                    <option value="Meghna Bank Limited.">Meghna Bank Limited.</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3" style="font-weight: bold">Branch</label>
                                <select class="form-control" name="branch" id="exampleFormControlSelect2">
                                    <option value="Adabar">Adabar</option>
                                    <option value="Badda">Badda</option>
                                    <option value="Banani">Banani</option>
                                    <option value="Dhanmondi">Dhanmondi</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Kalabagan">Kalabagan</option>
                                    <option value="Khilkhet">Khilkhet</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Mohammadpur" >Mohammadpur</option>
                                    <option value="Motijheel">Motijheel</option>
                                    <option value="Mugda">Mugda</option>
                                    <option value="New Market">New Market</option>
                                    <option value="Pallabi">Pallabi</option>
                                    <option value="Paltan">Paltan</option>
                                    <option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                    <option value="Tejgaon">Tejgaon</option>
                                    <option value="Turag">Turag</option>
                                    <option value="Uttara">Uttara</option>
                                    <option value="Vatara">Vatara</option>
                                    <option value="Wari">Wari</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4" style="font-weight: bold">Address</label>
                                <input type="text" name="address"  value="" class="form-control" id="exampleInputPassword4">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender" style="font-weight: bold">Working Hours</label>
                                <select class="form-control" name="working_hours" id="exampleFormControlSelect2">
                                    <option>10AM-05PM</option>
                                    <option>09AM-04PM</option>
                                </select>
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
