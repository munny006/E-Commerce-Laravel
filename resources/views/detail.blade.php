@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="/img/{{$product['gallery']}}" class="detail-img">
    </div>
     <div class="col-sm-6">
      <a href="/" class="btn btn-danger"> Go Back </a>
      <h2>{{$product['name']}}</h2>
      <h3> Price : {{$product['price']}}</h3>
      <h4> Description : {{$product['description']}}</h4>
      <h5> Category : {{$product['cateory']}}</h5>
      <br><br>
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        
     
      <button class="btn btn-primary"> Add To Cart </button>
       </form>
   
      <br><br>
      <button class="btn btn-success"> Buy Now </button>
      <br><br>
    </div>
    
  </div>

</div>
@endsection