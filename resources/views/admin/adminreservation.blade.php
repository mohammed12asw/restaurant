<x-app-layout>
   
       
      
        
               
              


    @include('admin.adminheader')
    
    <div class="container-scroller">
    @include('admin.adminnav')
    
      <!-- partial:partials/_navbar.html -->
    
    <div class="container m-3">

    <h1 style="color:red;text-align:center;padding:15px">Online Reservations</h1>
    <table class=" table table-light">
     
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Guest</th>
          <th>date</th>
          <th>time</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
        @foreach ($data as $data)
            
      
        <tr>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->nuest}}</td>
          <td>{{$data->date}}</td>
          <td>{{$data->time}}</td>
          <td>{{$data->message}}</td>
      
           <th><a class="btn btn-danger" href="{{url('/deletereservation',$data->id)}}">Delete</a></th> 
    
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    </div>
        @include('admin.adminfooter')
    
         
    </x-app-layout>  