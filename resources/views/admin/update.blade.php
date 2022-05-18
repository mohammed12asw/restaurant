<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-6 offset-3">
            <h2 class="text-center text-dark py-3">Update Foods Data</h2>
        
       <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-dark">
       <label class="py-2" for="title"><h3>Title:</h3></label>
       <input type="text" class="form-control" value='{{$data->title}}' id="title" name="title">
       </div>
       <div class="form-group text-dark">
       <label class="py-2" for="price"><h3>Price:</h3></label>
       <input type="text" class="form-control" value='{{$data->price}}' id="price" name="price">
      </div>
       <div class="form-group text-dark">
       <label class="py-2" for="desc"><h3>Description:</h3></label>
       <input type="text" class="form-control" value='{{$data->desc}}' id="desc" name="desc">
       </div>
     <div class="form-group text-dark">
       <label class="py-2" for="image"><h3>Image:</h3></label>
      <input type="file" class="form-control" value='{{$data->image}}' id="image" name="image">
        </div>

       <button type="submit" class="btn btn-primary">Save</button>
       </form> 

</body>
</html>