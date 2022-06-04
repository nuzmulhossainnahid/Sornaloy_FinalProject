<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.include.head')
    <link rel="stylesheet" type="text/css" href="user/css/simple-slider.css">
    <link rel="stylesheet" href="user/css/style1.css">

    </head>
<body>
    <!-- /.top-bar -->
    @include('user.include.navbar')
    {{-- slider --}}

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    {{-- <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Loan Calculator</li>
                        </ol>
                    </div> --}}
                    <div class="template-demo">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Loan Calculator</a></li>
                          </ol>
                        </nav>
                      </div>
                </div>
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Loan Calculator</h1>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                                <div class="row">
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="btn-action"> <a href="{{ url('howToApply') }}" class="btn btn-default">How To Apply</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Give me call back</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Emi Caculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="bg-light pinside40 outline">
                                        <span>Loan Amount is </span>
                                        <strong>
                                            <span class="pull-right" id="la_value">30000</span></strong>
                                        <input type="text" data-slider="true" value="30000" data-slider-range="100000,5000000" data-slider-step="10000" data-slider-snap="true" id="la">
                                        <hr>
                                        <span>No. of Month is <strong>
                                            <span class="pull-right"  id="nm_value">30</span> </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="30" data-slider-range="120,360" data-slider-step="1" data-slider-snap="true" id="nm">
                                        <hr>
                                        <span>Rate of Interest [ROI] is <strong><span class="pull-right"  id="roi_value">10</span>
                                        </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="10.2" data-slider-range="8,16" data-slider-step=".05" data-slider-snap="true" id="roi">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline">
                                                Monthly EMI
                                                <h2 id='emi' class="pull-right"></h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline">
                                                Total Interest
                                                <h2 id='tbl_int' class="pull-right"></h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline"> Payable Amount
                                                <h2 id='tbl_full' class="pull-right"></h2></div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline">
                                                Interest Percentage
                                                <h2 id='tbl_int_pge' class="pull-right"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div id="loantable" class='table table-striped table-bordered loantable table-responsive'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('user.include.footer')
    {{-- scripts --}}
    @include('user.include.script')
    <script src="user/js/jquery.min.js"></script>
    <script type="text/javascript" src="user/js/simple-slider.js"></script>
    <script type="text/javascript" src="user/js/calculator.js"></script>

</body>
</html>
