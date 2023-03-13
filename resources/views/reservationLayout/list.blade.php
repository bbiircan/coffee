<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOPPEE-COFFEE</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
<div class="bg-dark py-3"> <!--Coffee yazısı ayarı-->
    <div class="container">
        <div class="h4 text-white">KOPPEE-COFFEE</div>
    </div>
</div>
<div class="container ">
    <div class="d-flex justify-content-between py-3"><!--Tablo Ayarı-->
        <div class="h4">RESERVATION</div>
        <div>
            <a href="{{route('reservation')}}" class="btn btn-dark">Reservation</a>
        </div>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card-border-0 shadow-lg">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MAIL</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>PERSON</th>
                </tr>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->id}}</td>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->email}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time}}</td>
                        <td>{{$reservation->person}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
