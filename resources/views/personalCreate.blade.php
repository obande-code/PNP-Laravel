@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
  <form method="GET" action="/personal/new">
    @csrf
    <div class="card-body">
      <h4>Create a new personal</h4>
      <br/>
      <div class="row">
        <div class="form-group col-6">
          <label for="exampleInputEmail1">Full Name</label>
          <input required type="text" class="form-control" id="inputFullname" name="name" placeholder="Enter Full Name">
        </div>
        <div class="form-group col-6">
          <label for="exampleSelectRounded0">Rank</label>
          <select required class="custom-select rounded-0" id="exampleSelectRounded0" name="Rank">
            <option>PGEN</option>
            <option>PLTGEN</option>
            <option>PMGEN</option>
            <option>PBGEN</option>
            <option>PCOL</option>
            <option>PLTCOL</option>
            <option>PMAJ</option>
            <option>PCPT</option>
            <option>PMAJ</option>
            <option>PLT</option>
            <option>PEMS</option>
            <option>PCMS</option>
            <option>PMSg</option>
            <option>PSSg</option>
            <option>PCpl</option>
            <option>Pat</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="exampleInputPassword1">Station</label>
          <select required class="custom-select rounded-0" name="station" id="inputStation">
            <option>station1</option>
            <option>station2</option>
          </select>
        </div>
        <div class="form-group col-6">
          <label for="exampleInputPassword1">Home Address</label>
          <input type="text" required class="form-control" name="home" id="inputHomeaddress" placeholder="Home Address">
        </div>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputPassword1">Device ID</label>
        <input type="text" class="form-control" id="inputDevice" placeholder="Device ID">
      </div> -->
      <div class="form-group">
        <label for="exampleInputPassword1">Email Address</label>
        <input type="email" required class="form-control" name="email" id="inputEmail" placeholder="Email Address">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="d-flex justify-content-center">
      <button type="submit" class="btn float-left btn-primary mr-5"> Create </button>
      <a href='/personal' type="button" class="btn float-right btn-danger ml-5">Cancel</a>
    </div>
  </form>
</div>
<script>
    document.getElementById('pnp_icon').src = 'http://localhost:8000/images/icon_images/pnp-orange1.png';
    document.getElementById('pnp_text').style.color = '#ffc34d';
</script>
@endsection
