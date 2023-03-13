
@extends('back.app')
@section('back')@endsection

<body>
<!-- Navbar Start -->
@include('back.navbar')
<!-- Navbar End -->

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('frontend/img')}}/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                    <h1 class="display-1 text-white m-0">COFFEE</h1>
                    <h2 class="text-white m-0">* SINCE 1950 *</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('frontend/img')}}/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                    <h1 class="display-1 text-white m-0">COFFEE</h1>
                    <h2 class="text-white m-0">* SINCE 1950 *</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
@include('back.about_start')
<!-- About End -->


<!-- Service Start -->
@include('back.service_start')
<!-- Service End -->


<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
    <div class="container py-5">
        <h1 class="display-3 text-primary mt-3">50% OFF</h1>
        <h1 class="text-white mb-3">Sunday Special Offer</h1>
        <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
        <form class="form-inline justify-content-center mb-4">
            <div class="input-group">
                <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Offer End -->


<!-- Menu Start -->
@include('back.menu_start')
<!-- Menu End -->


<!-- Reservation Start -->
@include('back.reservation_start')
<!-- Reservation End -->


<!-- Testimonial Start -->
@include('back.testimonial_start')
<!-- Testimonial End -->


<!-- Footer Start -->
@include('back.footer')
<!-- Footer End -->


@include('back.script')
</body>

</html>
