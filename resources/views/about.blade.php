@extends('back.app')
@section('back')@endsection

<body>
<!-- Navbar Start -->
@include('back.navbar')
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">About Us</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
@include('back.about_start')
<!-- About End -->


<!-- Footer Start -->
@include('back.footer')
<!-- Footer End -->


@include('back.script')
</body>

</html>
