@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="product_image/{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <input type="text" id="country" name="price" value="Price : {{$product['price']}}" readonly><!--<h3 >Price : {{$product['price']}}</h3>-->
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value="{{$product['id']}}">
           <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="quantity" id="name" placeholder="Enter the reqired quantity" required>
          </div>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection