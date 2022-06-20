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
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;font-weight: bolder;font-size: xx-large;">Bank</h5>
                            <a href="{{url('list_bankSchedule')}}" class="btn btn-primary w-100">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;font-weight: bolder;font-size: xx-large;">Door Step</h5>
                            <a href="#" class="btn btn-primary w-100">Go</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<!-- container-scroller -->

@include('admin.include.script')
</body>


</html>
