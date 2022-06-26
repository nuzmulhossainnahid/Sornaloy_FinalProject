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




    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($data as $data)

            <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center" style="font-size: xx-large; color: #0b0b0b">Bank Name:{{$data->bankName}}</div>
                            <h5 class="text-center" style="font-size: x-large;margin-bottom: 10px; color: #0b0b0b"; >Date: {{$data->date}}</h5>
                            <h5 class="card-title text-center text-2xl">Branch: {{$data->branch}}</h5>
                            <h5 class="card-title">Time: {{$data->time}}</h5>
                            <p class="card-text">Address: {{$data->address}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated {{$data->updated_at}}</small>
                        </div>
                    </div>

            </div>
        @endforeach
    </div>





</div>


{{-- footer --}}
@include('user.include.footer')
{{-- scripts --}}
@include('user.include.script')
</body>
</html>
