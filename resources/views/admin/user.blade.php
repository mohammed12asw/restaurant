<x-app-layout>
   
       
      
        
               
              


@include('admin.adminheader')

<div class="container-scroller">
@include('admin.adminnav')

  <!-- partial:partials/_navbar.html -->

<div class="container">
{{-- <h1 style="color:red;text-align:center;padding:15px">userrs</h1> --}}
<table class=" table table-light">
 
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    @foreach ($data as $data)
        
  
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
       @if ($data->usertype==0){
      <th><a class="btn btn-danger" href="{{url('/deleteuser',$data->id)}}">Delete</a></th>
      }
       @else{
      <th><a class="btn btn-info" href="#">Not Allowed</a></th>
      }
      
 
        @endif
      

    </tr>
    @endforeach
</table>
</div>
</div>
</div>
    @include('admin.adminfooter')

     
</x-app-layout>  