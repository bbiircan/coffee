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
        <div class="h4">COFFEE</div>
        <div>
            <a href="{{route('layout.index')}}" class="btn btn-dark">Back</a>
        </div>
    </div>
    <form action="{{route('layout.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="50" rows="4" placeholder="Enter Description" class="form-control @error ('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                    @error('description')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"></label>
                    <input type="file" name="image" class="@error('image') is-invalid @enderror">
                    @error('image')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Save Menu</button>
    </form>
</div>
</body>
</html>
