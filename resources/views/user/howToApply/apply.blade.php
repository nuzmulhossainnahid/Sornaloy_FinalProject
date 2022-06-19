<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.include.head')
</head>
<body>
<!-- /.top-bar -->
@include('user.include.navbar')
{{-- slider --}}

<div class="col-12 grid-margin stretch-card" style="margin-top: 20px;margin-bottom: 20px">
  <div class="col-12 grid-margin" >
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="font-size: xx-large;">Apply For Loan</h4>
        <form class="form-sample" action="{{url('application')}}" method="post" enctype="multipart/form-data">
          @csrf
          <p class="card-description" style="font-size: x-large;font-weight: bolder">
            Personal info
          </p>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" readonly value="{{$data->Name}}" name="name" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Fathers/Husband Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"name="fatherHusbandName" readonly value="{{$data->FathersHusbandName}}" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mothers Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="motherName" readonly value="{{$data->MothersName}}" />

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input class="form-control" name="dateOfBirth" readonly value="{{$data->DateofBirth}}" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">NID NO</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nidNo" readonly value="{{$data->NIDNo}}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Occupation</label>

                  <div class="col-sm-9">

                      <input type="text" class="form-control" name="occupation" />
                      {{--<input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>--}}
                      {{--Free--}}
                  </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone No</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="phoneNo"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>

                <div class="col-sm-9">

                  <input type="email" class="form-control" name="email"/>
                  {{--<input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>--}}
                  {{--Free--}}
                </div>
              </div>
            </div>
          </div>



          <p class="card-description" style="font-size: x-large;font-weight: bolder">
            Address
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Permanent Address </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="permanentAddress" readonly value="{{$data->PermanentAddress}}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$result->regionName}}" name="state" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Present Address</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="presentAddress" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Postcode</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$result->zip}}" name="postCode" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$result->city}}" name="city" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$result->country}}" name="country" />
                </div>
              </div>
            </div>
          </div>


          <p class="card-description" style="font-size: x-large;font-weight: bolder">
            Loan Information
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gold Amount</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="goldAmount" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gold Type</label>
                <div class="col-sm-9">
                  <select class="form-control" name="goldType">
                  <option>24 Crate</option>
                  <option>18 Crate</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Loan Amount</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="loanAmount"  />
                </div>
              </div>
            </div>
          </div>




          <p class="card-description" style="font-size: x-large;font-weight: bolder">
            Additional Files
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Your Photo</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="photo" />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <input type="submit" class="btn btn-outline-success form-control">
              </div>
            </div>
          </div>






        </form>
      </div>
    </div>
  </div>
</div>

{{-- footer --}}
@include('user.include.footer')
{{-- scripts --}}
@include('user.include.script')
</body>
</html>
