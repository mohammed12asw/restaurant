<x-app-layout>
   
       
      
        
               
              


    @include('admin.adminheader')
    
    <div class="container-scroller">
    @include('admin.adminnav')
    
      <!-- partial:partials/_navbar.html -->
    
    <div class="container color-light">

      {{-- insert foods data --}}
        <div class="row">
            <div class="col-6 offset-3 text-info bg-light">
                <h2 class="text-center text-primary py-3">Insert Foods Data</h2>
            
           <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group  ">
           <label class="py-2" for="title"><h3>Title:</h3></label>
           <input type="text" class="form-control text-info bg-light" placeholder="Enter title" id="title" name="title">
           </div>
           <div class="form-group text-info bg-light ">
           <label class="py-2" for="price"><h3>Price:</h3></label>
           <input type="text" class="form-control text-info bg-light" placeholder="Enter price" id="price" name="price">
          </div>
           <div class="form-group text-info bg-light ">
           <label class="py-2" for="desc"><h3>Description:</h3></label>
           <input type="text" class="form-control text-info bg-light" placeholder="Enter desc" id="desc" name="desc">
           </div>
         <div class="form-group text-info bg-light ">
           <label class="py-2" for="image"><h3>Image:</h3></label>
          <input type="file" class="form-control text-info bg-light" placeholder="Enter image" id="image" name="image">
            </div>
    
           <button type="submit" class="btn btn-primary">Save</button>
           </form> 

         


              </div>
           </div>
             {{-- end insert food data --}}


      {{-- start delete table --}}
       
       <div class="row">
        <div class="col-12 ">
          <h2 class="text-center text-dark py-3">Delete  Foods Data</h2>
          <table class=" table table-light">
 
            <tr>
              <th>Title</th>
              <th>Price</th>
              <th>Description</th>
              <th>image</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
            
            @foreach ($data as $data)
        
  
            <tr>
              <td>{{$data->title}}</td>
              <td>{{$data->price}}</td>
              <td><div style="overflow-x:scroll;width:300px;height:40px;">{{$data->desc}}</div></td>
              <td><img src="/foodimage/{{$data->image}}" width=200px height=200px></td>
              <td ><a class="btn btn-danger" href="{{url('/deletefood',$data->id)}}">Delete</a></td>
              <td ><a class="btn btn-info" href="{{url('/updatefood',$data->id)}}">Update</a></td>
      
              
            </tr>
            @endforeach

          </table>
        </div>
      
    </div>
    {{-- end delete table --}}


  </div>


    
</div>
    
    </div>
        @include('admin.adminfooter')
    
         
    </x-app-layout>  