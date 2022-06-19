<!DOCTYPE html>
<html lang="en">

    <base href="/public">
@include('admin.include.head')
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
                <form class="forms-sample" action="{{ url('edit_sliderConf',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="sliderTitle" value="{{ $data->sliderTitle}}" id="exampleInputName1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Text</label>
                    <input type="text" class="form-control" name="sliderText" value="{{ $data->sliderText}}" id="exampleInputEmail3" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Btn Text</label>
                    <input type="text" name="sliderBtn" class="form-control" value="{{ $data->sliderBtn}}" id="exampleInputPassword4" >
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Btn Link</label>
                    <input type="text" name="link" class="form-control" value="{{ $data->link}}" id="exampleInputPassword4" >
                    </div>


                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title d-flex">Old Image</h4>
                              <img src="public/SliderImage/{{ $data->image }}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>


                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title d-flex">New Image</h4>
                              <input type="file" name="image" class="dropify" />
                            </div>
                          </div>
                        </div>
                      </div>




                  <div class="card-body">
                    <label for="exampleSelectGender">Btn Color</label>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="radio" value="primary" class="form-check-input" name="btncolor" id="ExampleRadio1" checked>
                                Primary
                              </label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="radio" value="success" class="form-check-input" name="btncolor" id="ExampleRadio2" checked>
                                Success
                              </label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="radio" value="info" class="form-check-input" name="btncolor" id="ExampleRadio3" checked>
                                Info
                              </label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="radio" value="danger" class="form-check-input" name="btncolor" id="ExampleRadio4" checked>
                                Danger
                              </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="radio" value="warning" class="form-check-input" name="btncolor" id="ExampleRadio5" checked>
                                Warning
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
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
