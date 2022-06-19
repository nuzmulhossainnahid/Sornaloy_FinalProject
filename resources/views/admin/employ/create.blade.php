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

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        Data table
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
                        <h4 class="card-title">Data table</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>

                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Add To Empoloy</th>
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
                                                <td>
                                                    <button class="btn btn-outline-primary"><a href="{{ url('add_employ',$data->id) }}">ADD</a></button>
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
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('admin.include.script')
</body>


</html>
