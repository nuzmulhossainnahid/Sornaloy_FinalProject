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
            <h4 class="card-title" style="font-size: xx-large;font-weight: bold">Available Date</h4>
            <form class="forms-sample" action="{{url('find_bank_branch')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select class="form-control" name="date" id="exampleFormControlSelect2">
                        @foreach ($data as $data)
                            <option value="{{$data->date}}">{{$data->date}}</option>
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
