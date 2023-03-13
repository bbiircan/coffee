<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
            <h1 class="display-4">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach($testimonials as $testimonial)
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{$testimonial->image}}" alt="">
                        <div class="ml-3">
                            <h4>{{$testimonial->title}}</h4>
                            <i>{{$testimonial->job}}</i>
                        </div>
                    </div>
                    <p class="m-0">{{$testimonial->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
