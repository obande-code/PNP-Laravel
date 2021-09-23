@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/station/change">
    <div class="card-body">
      <h4>Edit a Station</h4>
      <br/>
      <div class="form-group">
        <input type="text" class="form-control" name="id" value="{{$position->id}}" style="visibility: hidden" id="inputFullname" placeholder="Category">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">Station Name</label>
          <input type="text" value="{{$position->name}}" class="form-control" name="name" id="inputFullname" placeholder="Enter Full Name">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" value="{{$position->address}}" class="form-control" id="inputAddress" name="address" placeholder="Address">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Change </button>
      <a href="/station" type="submit" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('station_icon').src = 'http://localhost:8000/images/icon_images/station-yellow.png';
    document.getElementById('station_text').style.color = '#ffc34d';
</script>
@endsection
