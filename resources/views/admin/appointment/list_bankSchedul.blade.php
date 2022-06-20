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
                        <h4 class="card-title">Bank Schedule</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>

                                        <tr>
                                            <th>Bank Name</th>
                                            <th>Branch</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Condition</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->bankName }}</td>
                                                <td>{{ $data->branch }}</td>
                                                <td>{{ $data->date }}</td>
                                                <td>{{ $data->time }}</td>
                                                <td>{{ $data->condition }}</td><td>
                                                    <button class="btn btn-outline-primary"><a href="{{ url('',$data->id) }}">Edit</a></button>
                                                    <button class="btn btn-outline-danger"><a href="{{ url('',$data->id) }}">Delete</a></button>
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
