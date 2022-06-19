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
            @if (session()->has('message'))
                <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        Employ table
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Employ table</li>
                        </ol>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Employ table</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>

                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td><img src="EmployImage/{{ $data->profile_photo_path }}" style="height: 80px;width: 120px;" alt=""></td>
                                                <td>
                                                    <button class="btn btn-outline-primary"><a href="{{ url('edit_employ',$data->id) }}">Edit</a></button>
                                                    <button class="btn btn-outline-danger"><a href="{{ url('delete_employ',$data->id) }}">Delete</a></button>
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



@include('admin.include.footer')

@include('admin.include.script')

</body>


</html>
