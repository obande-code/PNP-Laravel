@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/category/new">
    <div class="card-body">
      <h4>Create a new Category</h4>
      <br/>
      <div class="form-group">
          <label for="exampleInputEmail1">Position</label>
          <input type="text" class="form-control" name="position" id="inputFullname" placeholder="Enter Full Name">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <input type="text" class="form-control" name="category" id="inputAddress" name="address" placeholder="Category">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Create </button>
      <a href="/category" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('category_icon').src = 'http://localhost:8000/images/icon_images/category-yellow.png';
    document.getElementById('category_text').style.color = '#ffc34d';
</script>
@endsection
