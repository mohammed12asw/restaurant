<x-app-layout>
   
       <base href="/public"
    @include('admin.adminheader')
    
    <div class="container-scroller">
    @include('admin.adminnav')
    
      <!-- partial:partials/_navbar.html -->
    
    <div class="container color-dark">

      {{-- insert foods data --}}
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="text-center text-dark py-3">Update Foods Data</h2>
            
           <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-dark">
           <label class="py-2" for="title"><h3>Title:</h3></label>
           <input type="text" class="form-control color-light" value='{{$data->title}}' id="title" name="title">
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

           <div class="form-group text-dark">
           <label class="py-2" for="image"><h3>Old Image:</h3></label>
         <img src="/foodimage/{{$data->image}}" width=200px height=200px alt="">
            </div>

           
           <button type="submit" class="btn btn-primary">Save</button>
           </form> 

         


              </div>
           </div>
             {{-- end insert food data --}}


  


  </div>
</div>
@include('admin.adminfooter')
    
         
</x-app-layout>  