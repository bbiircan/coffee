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
        <div class="h4">MENU</div>
        <div>
            <a href="{{route('layout.create')}}" class="btn btn-success">Create</a>
            <a href="{{route('menu')}}" class="btn btn-dark">Menu</a>
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
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>
                            @if($menu->image != '' && file_exists(public_path().'/frontend/img/'.$menu->image))
                                <img src="{{asset('frontend/img/'.$menu->image)}}" alt="" width="100">
                            @endif
                        </td>

                        <td>{{$menu->title}}</td>
                        <td>{{$menu->description}}</td>

                        <td>
                            <a href="{{route('layout.edit',$menu->id)}}" class="btn btn-warning btn-sm mt-4">Edit</a>
                            <a href="#" onclick="deleteLayout({{$menu->id}})" class="btn btn-danger btn-sm mt-4">Delete</a>
                            <form id="layout-edit-action-{{$menu->id}}" action="{{route('layout.destroy',$menu->id)}}" method="post">
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
            document.getElementById('layout-edit-action-'+id).submit();
        }
    }
</script>
