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
        <div class="h4">SERVICE</div>
        <div>
            <a href="{{route('servicelayout.create')}}" class="btn btn-success">Create</a>
            <a href="{{route('service')}}" class="btn btn-dark">Service</a>
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
                    <th>IMAGE</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>
                            @if($service->image != '' && file_exists(public_path().'/frontend/img/'.$service->image))
                                <img src="{{asset('frontend/img/'.$service->image)}}" alt="" width="100">
                            @endif
                        </td>
                        <td>{{$service->title}}</td>
                        <td>{{$service->description}}</td>
                        <td>
                            <a href="{{route('servicelayout.edit',$service->id)}}" class="btn btn-warning btn-sm mt-2 ">Edit</a>
                            <a href="#" onclick="deleteLayout({{$service->id}})" class="btn btn-danger btn-sm mt-3">Delete</a>
                            <form id="servicelayout-edit-action-{{$service->id}}" action="{{route('servicelayout.destroy',$service->id)}}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script>
    function deleteLayout(id){
        if(confirm("Silmek İstediğinizden Emin Misiniz?")){
            document.getElementById('servicelayout-edit-action-'+id).submit();
        }
    }
</script>
