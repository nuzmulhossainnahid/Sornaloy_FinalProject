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
        <a href="">
        <img src="image/bank.png" style="width: 480px; height: 200px; margin-left: 400px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size: xx-large; font-weight: bold;text-align: center">BANK</h5>
            <p class="card-text">If you select bank,You have to come Bank and submit all document.</p>
        </div>
        </a>
    </div>
    <div class="card">
        <a href="">
        <div class="card-body">

            <h5 class="card-title" style="font-size: xx-large; font-weight: bold;text-align: center">Door Step</h5>
            <img src="image/door.png" style="width: 480px; height: 200px; margin-left: 400px;" class="card-img-top" alt="...">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
