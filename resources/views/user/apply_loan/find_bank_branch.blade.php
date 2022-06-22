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
    <div class="card mb-3">

        <div class="card-body">
            <h4 class="card-title" style="font-size: xx-large;font-weight: bold">Available Bank</h4>
            <h4 class="card-title" style="font-size: larger;font-weight: bold">Date: {{$date}}</h4>
            <form class="forms-sample" action="{{url('bank_branch_time')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="date"value="{{$date}}">
                    <select class="form-control" name="bankName" id="exampleFormControlSelect2">
                        @foreach ($data as $data)
                            <option value="{{$data->bankName}}">{{$data->bankName}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" style="background-color: green" class="btn btn-primary form-control">Find</button>

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
