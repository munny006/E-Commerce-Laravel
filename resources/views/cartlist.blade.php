@extends('master')
@section("content")
<div class="custom-product">

 <div class="col-sm-10"> 
<div class="trending-wrapper">
  <h2>Result For Products</h2>
 
    <a href="ordernow" class="btn btn-success"> Order Now </a><br><br>
   
      @foreach($product as $item)
      <div class="row search-item cart-list-div">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
          <img class="trending-img" src="/img/{{$item->gallery}}">
         
        </a>
          
        </div>
         <div class="col-sm-4">
          
          <div class="">
            <h2>{{$item->name}}</h2>
            <h5>{{$item->description}}</h5>
          </div>
        </a>
          
        </div>
         <div class="col-sm-3">
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove To Cart</a>
          
        </div>
        
      </div>

      @endforeach
    </div>
  
  </div>


</div>
@endsection