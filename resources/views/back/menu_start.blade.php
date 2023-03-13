<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
            <h1 class="display-4">Competitive Pricing</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Hot Coffee</h1>
                @foreach($menus as $menu)
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('frontend/img/'.$menu->image)}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>{{$menu->title}}</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Cold Coffee</h1>
                @foreach($menus as $menu)
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('frontend/img/'.$menu->image)}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>{{$menu->title}}</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
