@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-4">
  <a href=""> Filter</a>
 </div>
 <div class="col-sm-4">
  
<div class="trending-wrapper">
  <h2>Result For Products</h2>
  <!-- Wrapper for slides -->
  <div class="carousel-inner text-center">
    @foreach($products as $item)
    <div class="search-item">
        <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="/img/{{$item['gallery']}}">
      <div class="">
      <h2>{{$item['name']}}</h2>
      <h5>{{$item['description']}}</h5>
    </div>
</a>
</div>
    
    @endforeach
  </div>
   
 </div>


</div>
@endsection