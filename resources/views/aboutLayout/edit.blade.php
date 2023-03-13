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
            <a href="{{route('aboutlayout.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <form action="{{route('aboutlayout.update',$story->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror" value="{{old('title',$story->title)}}">
                    @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label">Text</label>
                    <input type="text" name="text" id="text" placeholder="Enter Text" class="form-control @error('text') is-invalid @enderror" value="{{old('text',$story->text)}}">
                    @error('text')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="50" rows="4" placeholder="Enter Description" class="form-control"> @error ('description') is-invalid @enderror {{old('description',$story->description)}}</textarea>
                    @error('description')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <input type="text" name="topic" id="topic" placeholder="Enter Topic" class="form-control @error('topic') is-invalid @enderror" value="{{old('topic',$story->topic)}}">
                    @error('topic')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="declaration" class="form-label">Declaration</label>
                    <input type="text" name="declaration" id="declaration" placeholder="Enter Content" class="form-control @error('declaration') is-invalid @enderror" value="{{old('declaration',$story->declaration)}}">
                    @error('declaration')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

            </div>
        </div>
        <button class="btn btn-primary my-3">Update About</button>
    </form>
</div>
</body>
</html>
