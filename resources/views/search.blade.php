@extends('layout')

@section('content')
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Search By Illness</h2>
                        <form action="/searchbyill">
                            @csrf
                      <label for="">  Please select the illness from List :</label> 
                         <div class="form-group">
                         <select name="illness" id="" class="form-control">
                             
                            @foreach ($illnesses as $ill)
                             <option value="{{$ill->name}}">{{$ill->name}}</option>     
                             @endforeach
                            
                            

                         </select><br>

                         <input type="submit" value=" Startsearch" class="btn btn-warning">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach ($data as $d)
                        <form action="{{url('/addcart', $d->id)}}" method="post">
                            @csrf
                            <div class="item">
                                <div style="background-image: url('{{ $d->image }}')" class='card'>
                                    {{-- <img src="{{$d->image}}" alt=""> --}}
                                    <div class="price">
                                        <h6>{{ $d->price }}</h6>
                                    </div>
                                    <div class='info'>
                                        <h1 class='title'>{{ $d->name }}</h1>
                                        <p class='description'>
                                            <label for="">calories: </label>{{ $d->Kal}}</p>

                                            <p class='description'>
                                                <label for="">carbs: </label>{{ $d->carbs }}</p>
                                        
                                                <p class='description'>
                                                    <label for="">fat: </label>{{ $d->fat }}</p>

                                                    <p class='description'>
                                                        <label for="">procount: </label>{{ $d->procount }}</p>
                                                     
                                        
                                                    <p class='description'>
                                                        <label for="">fiber: </label>{{ $d->fiber }}</p>
                                                    
                                        <div class="main-text-button">
                                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                        class="fa fa-angle-down"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    {{-- <h4>Ilness : {{ $data->illness }}</h4> --}}
                                    <input class="form-control offset-4 col-4" type="number" name="quantity" min="1"
                                        value="1">
                                    <input class="form-control btn btn-danger " type="submit" value="Add To Cart">
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
