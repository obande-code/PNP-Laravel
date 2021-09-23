@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/violation/change">
    <div class="card-body">
      <h4>Edit a Violation</h4>
      <br/>
      <div class="form-group">
        <input type="text" class="form-control" name="id" value="{{$position->id}}" style="visibility: hidden" id="inputFullname" placeholder="Category">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <input type="text" class="form-control" value="{{$position->category}}" id="inputFullname" name="category" placeholder="Category">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Violation</label>
          <input type="text" class="form-control" value="{{$position->violation}}" name="violation" id="inputHomeaddress" placeholder="Violation">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <input type="text" class="form-control" value="{{$position->amount}}" id="inputEmail" name="amount" placeholder="Amount">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Change </button>
      <a href="/violation" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('violation_icon').src = 'http://localhost:8000/images/icon_images/violation-yellow.png';
    document.getElementById('violation_text').style.color = '#ffc34d';
</script>
@endsection
