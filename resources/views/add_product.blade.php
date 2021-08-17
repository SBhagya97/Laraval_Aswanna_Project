@extends('master')
@section("content")
<div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Add Your Product Details</h3> 
</div> 
<div class="panel-body">
  
<form action="designer-finish.html" class="form-horizontal" role="form">

<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Category</label>
	<div class="col-sm-9">
    <select class="form-control">
	<option value="">Category</option>
	<option value="texnolog2">Vegitables</option>
	<option value="texnolog3">Fruits</option>
    <option value="texnolog3">Grains</option>
   </select>
	</div>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name the product">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Unit Price">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label" aria-placeholder="Describe the product">Discription</label>
    <div class="col-sm-9">
      <textarea class="form-control"></textarea>
    </div>
  </div> <!-- form-group // -->
 
  <div class="form-group">
    <label class="col-sm-3 control-label">Existance</label>
    <div class="col-sm-3"> 
	  <label class="control-label small" for="date_start">MFD: </label>
	  <input type="text" class="form-control" name="date_start" id="date_start" placeholder="Manufacture Date">
    </div>
	<div class="col-sm-3">   
	  <label class="control-label small" for="date_finish">EXP:</label>
	  <input type="text" class="form-control" name="date_finish" id="date_finish" placeholder="Expiration Date">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Thumbnails</label>
    <div class="col-sm-3">
      <label class="control-label small" for="file_img">images (jpg/png):</label> <input type="file" name="file_img">
    </div>
	  </div> <!-- form-group // -->
  
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->


@endsection