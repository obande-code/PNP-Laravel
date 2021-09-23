@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
        <table class="table table-sm  table-bordered">
          <thead>
            <tr class="table-active">
              <th>Position</th>
              <th>Category</th>
              <th>Violation</th>
              <th>Amount</th>
              <th style="width: 100px">Edit</th>
              <th style="width: 100px">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                  <td>{{$product['id']}}</td>
                  <td>{{$product['category']}}</td>
                  <td>{{$product['violation']}}</td>
                  <td>{{$product['amount']}}</td>
                  <td><a href="{{ url('violation/Edit/' . $product) }}" type="button" class="btn btn-block btn-primary btn-sm">Edit</a></td>
                  <td><a href="{{ url('violation/Delete/' . $product) }}" type="button" class="btn btn-block btn-danger btn-sm">Delete</a></td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <a href="/violation/create" class="btn btn-success" style="width: 150px">Add New</a>
        <div class="d-flex justify-content-between mt-3">
            <h6>Showing 1-18 of 1431 results</h6>
            {{ $products->links() }}
            <nav style="visibility: hidden">Showing 1-18 of 1431 results</nav>
        </div>
      </div>
</div>
<script>
    document.getElementById('violation_icon').src = 'http://localhost:8000/images/icon_images/violation-yellow.png';
    document.getElementById('violation_text').style.color = '#ffc34d';
</script>
@endsection
