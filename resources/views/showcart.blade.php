<base href="/public">
@extends('layout')

@section('content')


<br>
<br>
<br>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h6>Customer CartShopping</h6>
                <h2>We offer the best ingredients for you</h2>
            </div>
        </div>
    </div>

    <table class=" table " id="table1">

        <br>
      
        <tr>
          <th>id</th>
          <th>Order</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      @foreach ($data as $d) 
            
      
        <tr>
          <td>{{ $d->cart_id }} </td>
          <td>{{ $d->title }} </td>
          <td >{{ $d->quantity }}</td>
          <td >{{ $d->price }} </td>
          <td >
            <script>
             
          var x  ={{ $d->quantity }} *  {{ $d->price }} ;
          
         
          document.write(x);
        
          </script>
         
            </td>
   
          <td><a class="btn btn-danger" href="{{ url('/deletecart',$d->cart_id) }}">Delete</a></td>
         
        </tr>
       @endforeach
       <tr>
        <td id="tinh" colspan="3" ><button>Sum Total</button> </td>
      
        
 
        <td id="valueTotal" ></td>
       




      </tr>
    
    </table>
    <script>
      $("button").click(function () {
           var sumVal = 0;
           var table = document.getElementById("table1");
   
           for (var i = 1; i < (table.rows.length-1); i++) {
               sumVal = sumVal + parseInt(table.rows[i].cells[3].innerHTML);
           }
   
         alert("hoooooo");
           document.getElementById("valueTotal").innerText = sumVal;
       });
    
   </script>
</div>
</section>
@endsection