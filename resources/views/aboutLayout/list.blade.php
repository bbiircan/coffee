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
        <div class="h4">ABOUT</div>
        <div>
            <a href="{{route('about')}}" class="btn btn-dark">About</a>
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
                    <th>TITLE</th>
                    <th>TEXT</th>
                    <th>DESCRIPTION</th>
                    <th>TOPIC</th>
                    <th>DECLARATİON</th>
                    <th>ACTION</th>
                </tr>
                @foreach($stories as $story)
                    <tr>
                        <td>{{$story->id}}</td>
                        <td>{{$story->title}}</td>
                        <td>{{$story->text}}</td>
                        <td>{{$story->description}}</td>
                        <td>{{$story->topic}}</td>
                        <td>{{$story->declaration}}</td>
                        <td>
                            <a href="{{route('aboutlayout.edit',$story->id)}}" class="btn btn-warning btn-sm mt-2 ">Edit</a>
                            <a href="#" onclick="deleteLayout({{$story->id}})" class="btn btn-danger btn-sm mt-3">Delete</a>
                            <form id="aboutlayout-edit-action-{{$story->id}}" action="{{route('aboutlayout.destroy',$story->id)}}" method="post">
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
            document.getElementById('aboutlayout-edit-action-'+id).submit();
        }
    }
</script>

