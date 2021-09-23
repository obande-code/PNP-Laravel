@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
        <table class="table table-sm  table-bordered">
          <thead>
            <tr class="table-active">
              <th>Rank</th>
              <th>Full Name</th>
              <th>Station</th>
              <th>Home Address</th>
              <th>Device ID</th>
              <th>E-mail Address</th>
              <th style="width: 100px">Edit</th>
              <th style="width: 100px">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td>{{$product['Rank']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['station']}}</td>
                <td>{{$product['home']}}</td>
                <td>{{$product['device']}}</td>
                <td>{{$product['email']}}</td>
                <td><a href="{{ url('personal/Edit/' . $product) }}" type="button" class="btn btn-block btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('personal/Delete/' . $product) }}" type="button" class="btn btn-block btn-danger btn-sm">Delete</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <a href="/personal/create" class="btn btn-success" style="width: 150px">Add New</a>
        <div class="d-flex justify-content-between mt-3">
            <h6>Showing 1-18 of 1431 results</h6>
            {{ $products->links() }}
            <nav style="visibility: hidden">Showing 1-18 of 1431 results</nav>
        </div>
      </div>
</div>
<script>
    document.getElementById('pnp_icon').src = 'http://localhost:8000/images/icon_images/pnp-orange1.png';
    document.getElementById('pnp_text').style.color = '#ffc34d';
</script>
@endsection
