@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/violation/new">
    <div class="card-body">
      <h4>Create a new Violation</h4>
      <br/>
      <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <select required class="custom-select rounded-0" id="exampleSelectRounded0" name="category">
            @foreach ($categorys as $category)
              <option>{{$category['category']}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Violation</label>
          <input type="text" class="form-control" name="violation" id="inputHomeaddress" placeholder="Violation">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <input type="text" class="form-control" id="inputEmail" name="amount" placeholder="Amount">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Create </button>
      <a href="/violation" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('violation_icon').src = 'http://localhost:8000/images/icon_images/violation-yellow.png';
    document.getElementById('violation_text').style.color = '#ffc34d';
</script>
@endsection
