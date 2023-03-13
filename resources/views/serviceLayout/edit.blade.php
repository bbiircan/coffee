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
            <a href="{{route('servicelayout.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <form action="{{route('servicelayout.update',$service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror" value="{{old('title',$service->title)}}">
                    @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="50" rows="4" placeholder="Enter Description" class="form-control"> @error ('description') is-invalid @enderror {{old('description',$service->description)}}</textarea>
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
                    <div class="pt-3">
                        @if($service->image != '' && file_exists(public_path().'/frontend/img/'.$service->image))
                            <img src="{{asset('/frontend/img/'.$service->image)}}" alt="" width="100">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary my-3">Update Service</button>
    </form>
</div>
</body>
</html>
