<!DOCTYPE html>
<html>
<head>
<!-- <link rel="icon" type="image/png" href="{{ asset('clean_favicon_0.png') }}"> -->
<title>Antibiotic Resistance Lab</title>
</head>
<body>



    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="file">Upload</label>
            <input type="file" name="file" class="form-control">
        </div>
        <input class="btn btn-success" type="submit" value="Upload Image" name="submit">
    </form>


</body>
</html>

