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
        <a href="{{url('apply_bank_home')}}">
        <div class="card-body">
            <h5 class="card-title" style="font-size: xx-large; font-weight: bold;">Bank</h5>

            <p class="card-text">If you select bank,You have to come Bank and submit all document.</p>
        </div>
        </a>
    </div>

    <div class="card mb-3">
        <a href="">
            <div class="card-body">
                <h5 class="card-title" style="font-size: xx-large; font-weight: bold;">Door Step</h5>

                <p class="card-text">If you select bank,You have to come Bank and submit all document.</p>
            </div>
        </a>
    </div>


</div>

{{-- footer --}}
@include('user.include.footer')
{{-- scripts --}}
@include('user.include.script')
</body>
</html>
