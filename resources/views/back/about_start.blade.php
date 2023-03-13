<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
            <h1 class="display-4">Serving Since 1950</h1>
        </div>
        <div class="row">
            @foreach($stories as $story)
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">{{$story->title}}</h1>
                    <h5 class="mb-3">{{$story->text}}</h5>
                    <p>{{$story->description}}</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img')}}/about.png" style="object-fit: cover;">
                    </div>
                    @endforeach
                </div>
                @foreach($stories as $story)
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3">{{$story->topic}}</h1>
                        <p>{{$story->declaration}}</p>
                        @foreach($story->lists as $storyList)
                            <h5 class="mb-3"><i class="fa {{$story->icon}} text-primary mr-3"></i>{{$storyList->declaration}}</h5>
                        @endforeach
                        <a href="{{route('home')}}" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                    </div>
                @endforeach
        </div>
    </div>
</div>
