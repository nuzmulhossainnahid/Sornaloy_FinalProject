<!DOCTYPE html>
<html lang="en">


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
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        Loan Application
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data table</li>
                        </ol>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Loan Application Data</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>

                                        <tr>
                                            <th>Id</th>
                                            <th>User Id</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Date of Birth</th>
                                            <th>NID NO</th>
                                            <th>Occupation</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Parment Address</th>
                                            <th>Loan Amount</th>
                                            <th>Gold Amount</th>
                                            <th>Gold Type</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->userId }}</td>
                                                <td><img src="Application_Image/{{ $data->photo }}" alt="" style="height: 80px;width: 120px;"></td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->dateOfBirth }}</td>
                                                <td>{{ $data->nidNo }}</td>
                                                <td>{{ $data->occupation }}</td>
                                                <td>{{ $data->phoneNo }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->presentAddress }}</td>
                                                <td>{{ $data->loanAmount }}</td>
                                                <td>{{ $data->goldAmount }}</td>
                                                <td>{{ $data->goldType }}</td>
                                                <td>
                                                    <button class="btn btn-outline-primary" style="height: 30px;width: 100px; margin-top: 10px; "><a href="{{ url('',$data->id) }}">Accepts</a></button>
                                                    <button class="btn btn-outline-danger" style="height: 30px;width: 100px;margin-top: 10px; "><a href="{{ url('',$data->id) }}">Delete</a></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>



    </div>
</div>
<!-- container-scroller -->

@include('admin.include.script')
</body>


</html>
