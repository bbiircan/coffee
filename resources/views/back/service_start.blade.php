<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
            <h1 class="display-4">Fresh & Organic Beans</h1>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('frontend/img/'.$service->image)}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa {{$service->icon}} service-icon"></i>{{$service->title}}</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit
                                invidunt, dolore tempor diam ipsum takima erat tempor</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

