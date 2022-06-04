<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:25 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sornaloy- Loan Apply From</title>
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
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>

<body>
      <div class="col-md-12">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Loan Application From
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home',$data->id) }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Loan Application</li>
                </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  {{--<h4 class="card-title">jquery-steps wizard</h4>--}}

                  <form id="example-form" action="apply_loan_request" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                      <h3>Personal Information</h3>
                      <section>
                        <h4>Personal Information</h4>
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" readonly name="name" value="{{ $data->Name }}"  >
                        </div>
                        <div class="form-group">
                          <label>Mothers Name</label>
                          <input type="text" class="form-control" readonly name="address" value="{{ $data->MothersName }}">
                        </div>
                        <div class="form-group">
                          <label>NID No</label>
                          <input type="text" class="form-control" name="nid" value="{{ $data->NIDNo }} " readonly>
                        </div>
                      </section>
                      <h3>Contact Information</h3>
                      <section>
                        <h4>Contact Information</h4>
                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" class="form-control" name="presentAddress">
                        </div>
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" >
                        </div>
                      </section>
                      <h3>Loan Information</h3>
                      <section>

                          <div class="form-group">
                            <label>Gold Amount</label>
                            <input type="text" class="form-control" name="goldAmount">
                          </div>
                          <div class="form-group">
                            <label>Loan Amount</label>
                            <input type="text" class="form-control" name="LoanAmount">
                          </div>
                          <div class="form-group">
                            <label>Your Photo</label>
                            <input type="file" class="form-control" name="image">
                          </div>

                          <div class="form-group">
                              <input type="submit" class="form-control btn btn-success" value="Submit">
                          </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-conte   sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/misc.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script>
      (function($) {
          'use strict';
          var form = $("#example-form");
          form.children("div").steps({
              headerTag: "h3",
              bodyTag: "section",
              transitionEffect: "slideLeft",
              onFinished: function(event, currentIndex) {
                  alert("Submitted!");
              }
          });
          var validationForm = $("#example-validation-form");
          validationForm.val({
              errorPlacement: function errorPlacement(error, element) {
                  element.before(error);
              },
              rules: {
                  confirm: {
                      equalTo: "#password"
                  }
              }
          });
          validationForm.children("div").steps({
              headerTag: "h3",
              bodyTag: "section",
              transitionEffect: "slideLeft",
              onStepChanging: function(event, currentIndex, newIndex) {
                  validationForm.val({
                      ignore: [":disabled", ":hidden"]
                  })
                  return validationForm.val();
              },
              onFinishing: function(event, currentIndex) {
                  validationForm.val({
                      ignore: [':disabled']
                  })
                  return validationForm.val();
              },
              onFinished: function(event, currentIndex) {
                  alert("Submitted!");
              }
          });
          var verticalForm = $("#example-vertical-wizard");
          verticalForm.children("div").steps({
              headerTag: "h3",
              bodyTag: "section",
              transitionEffect: "slideLeft",
              stepsOrientation: "vertical",
              onFinished: function(event, currentIndex) {
                  alert("Submitted!");
              }
          });
      })(jQuery);
  </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:26 GMT -->
</html>








