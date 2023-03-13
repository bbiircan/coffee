

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Menu Add</h1>

    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{route('menu')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Image: </label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="form-group"><br>
                <label>Name:</label><br><br>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group"><br>
                <label>Description:</label><br><br>
                <textarea  id="editor" name="content" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group"><br>
                <button type="submit" class="btn btn-primary btn-outline-success">Create Menu</button>


            </div>
        </form>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function () {
        $('#editor').summernote(
            {
                'height':1

            }
        );
    });
</script>






