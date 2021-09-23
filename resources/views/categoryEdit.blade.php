@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/category/change">
    <div class="card-body">
      <h4>Edit a Category</h4>
      <br/>
      <div class="form-group">
        <input type="text" class="form-control" name="id" value="{{$position->id}}" style="visibility: hidden" id="inputFullname" placeholder="Category">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">Position</label>
          <input type="text" value="{{$position->position}}" class="form-control" name="position" id="inputFullname" placeholder="Enter Full Name">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <input type="text" value="{{$position->category}}" class="form-control" name="category" id="inputAddress" name="address" placeholder="Category">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Change </button>
      <a href="/category" type="submit" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('category_icon').src = 'http://localhost:8000/images/icon_images/category-yellow.png';
    document.getElementById('category_text').style.color = '#ffc34d';
</script>
@endsection
