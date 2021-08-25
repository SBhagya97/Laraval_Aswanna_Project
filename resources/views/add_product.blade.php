@extends('master')
@section("content")
<div class="container">

  <section class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add Your Product Details</h3>
    </div>
    <div class="panel-body">

      <form action="{{url('add_product')}}" method= "POST"class="form-horizontal" role="form" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Category</label>
          <div class="col-sm-9">
            <select class="form-control" name="select_cat">
              <option value="Vegitables">Vegitables</option>
              <option value="Fruits">Fruits</option>
              <option value="Grains">Grains</option>
            </select>
          </div>
        </div> <!-- 
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">UID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="uid" id="name" placeholder="Name the product" required>
          </div>
          User ID // -->

        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Product Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name the product" required>
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Price Per kg</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="price" id="name" placeholder="Unit Price" required>
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="quantity" id="name" placeholder="Quantity As kg" required>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="about" class="col-sm-3 control-label"  aria-placeholder="Describe the product">Discription</label>
          <div class="col-sm-9">
            <textarea class="form-control"name="desc" required></textarea>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label class="col-sm-3 control-label">Existance</label>
          <div class="col-sm-3">
            <label class="control-label small" for="date_start">MFD: </label>
            <input type="date" class="form-control" name="MFD" id="date_start" placeholder="Manufacture Date">
          </div>
          <div class="col-sm-3">
            <label class="control-label small" for="date_finish">EXP:</label>
            <input type="date" class="form-control" name="EXP" id="date_finish" placeholder="Expiration Date">
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Thumbnails</label>
          <div class="col-sm-3">
            <label class="control-label small" for="file_img">images (jpg/png):</label> <input type="file" name="img">
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