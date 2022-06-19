<!DOCTYPE html>
<html lang="en">
<head>
@include('user.include.head')
</head>
<body>
    <!-- /.top-bar -->
    @include('user.include.navbar')
    {{-- slider --}}

    <div class="col-12 grid-margin stretch-card" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description">
              Basic form elements
            </p>
            <form action="apply_loan_customer" method="post" >
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">NID NO</label>
                <input type="text" name="nidNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter NID No">
                <small id="emailHelp" class="form-text text-muted">Enter Your NID No.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Date Of Birth</label>
                <input type="text" name="dateofBirth" class="form-control" id="exampleInputPassword1" >
                <small id="" class="form-text text-muted">Date formet:DD/MM/YYYY.</small>
              </div>

              <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
          </div>
        </div>
      </div>

    {{-- footer --}}
    @include('user.include.footer')
    {{-- scripts --}}
    @include('user.include.script')
</body>
</html>
