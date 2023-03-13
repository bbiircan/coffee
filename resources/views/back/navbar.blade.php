<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="{{route('home')}}" class="nav-item nav-link @if(!Request::segment(1)=="home") active @endif">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link @if(Request::segment(1)=="about") active @endif">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link @if(Request::segment(1)=="service") active @endif">Service</a>
                <a href="{{route('menu')}}" class="nav-item nav-link @if(Request::segment(1)=="menu") active @endif">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link @if(Request::segment(1)=="reservation" or Request::segment(1)=="testimonial") active @endif dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="{{route('reservation')}}" class="dropdown-item @if(Request::segment(1)=="reservation") active @endif ">Reservation</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item @if(Request::segment(1)=="testimonial") active @endif">Testimonial</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link @if(Request::segment(1)=="contact") active @endif">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link @if(Request::segment(1)=="layout.index" or Request::segment(1)=="servicelayout.index") active @endif dropdown-toggle" data-toggle="dropdown">Edit</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="{{route('layout.index')}}" class="dropdown-item @if(Request::segment(1)=="layout.index") active @endif ">Menu Edit</a>
                        <a href="{{route('servicelayout.index')}}" class="dropdown-item @if(Request::segment(1)=="servicelayout.index") active @endif">Service Edit</a>
                        <a href="{{route('aboutlayout.index')}}" class="dropdown-item @if(Request::segment(1)=="aboutlayout.index") active @endif">About Edit</a>
                        <a href="{{route('reservationlayout.index')}}" class="dropdown-item @if(Request::segment(1)=="reservationlayout.index") active @endif">Reservation Operation</a>


                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


