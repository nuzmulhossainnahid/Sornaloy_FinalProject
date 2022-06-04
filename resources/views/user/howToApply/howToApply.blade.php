<!DOCTYPE html>
<html lang="en">
<head>
@include('user.include.head')
    <link rel="stylesheet" href="admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="admin/css/style.css">
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>
<body>
    <!-- /.top-bar -->
    @include('user.include.navbar')
    {{-- slider --}}


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Solid header accordion</h4>
            <p class="card-description">Use class <code>.accordion-solid-header</code> for basic accordion</p>
            <div class="mt-4">
              <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="heading-10">
                    <h6 class="mb-0">
                      <a data-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                        How can I pay for an order I placed?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse-10" class="collapse show" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <img src="admin/images/samples/300x300/10.jpg" class="mw-100" alt="image"/>
                        </div>
                        <div class="col-9">
                          You can pay for the product you have purchased using credit cards, debit cards, or via online banking.
                          We also provide cash-on-delivery services.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="heading-11">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                        I can’t sign in to my account
                      </a>
                    </h6>
                  </div>
                  <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                    <div class="card-body">
                        If while signing in to your account you see an error message, you can do the following
                      <ol class="pl-3 mt-4">
                        <li>Check your network connection and try again</li>
                        <li>Make sure your account credentials are correct while signing in</li>
                        <li>Check whether your account is accessible in your region</li>
                      </ol>
                      <br>
                      <p class="text-success">
                        <i class="fa fa-exclamation-triangle-octagon mr-2"></i>If the problem persists, you can contact our support.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="heading-12">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                        Can I add money to the wallet?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse-12" class="collapse" role="tabpanel" aria-labelledby="heading-12" data-parent="#accordion-4">
                    <div class="card-body">
                      You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.
                    </div>
                  </div>
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
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/vendors/js/vendor.bundle.addons.js"></script>
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/misc.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
</body>
</html>
