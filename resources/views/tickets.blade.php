@extends('layouts.dashboard')
@section('mainContent')
<div>
<div class="table-responsive">
    <table class="table table-sm  table-bordered">
      <thead>
        <tr class="table-active">
          <th>Ticket No.</th>
          <th>Driver's Name</th>
          <th>Plate No.</th>
          <th>Apprehending Officer</th>
          <th>Location</th>
          <th>Amount</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
            <tr onclick="ticketclick({{$product}})" style="cursor: pointer;">
              <td>{{$product['id']}}</td>
              <td>{{$product['driversName']}}</td>
              <td>{{$product['plateNo']}}</td>
              <td>{{$product['apprehendingOfficer']}}</td>
              <td>{{$product['location']}}</td>
              <td>{{$product['amount']}}</td>
              @if ($product['status'] == 'Pending')
              <td><span class="badge badge-warning w-100">{{$product['status']}}</span></td>
              @endif
              @if ($product['status'] == 'Paid')
              <td><span class="badge badge-success w-100">{{$product['status']}}</span></td>
              @endif
              @if ($product['status'] == 'Cancel')
              <td><span class="badge badge-danger w-100">{{$product['status']}}</span></td>
              @endif
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-between mt-3">
        <h6>Showing 1-18 of 1431 results</h6>
        {{ $products->links() }}
        <nav style="visibility: hidden">Showing 1-18 of 1431 results</nav>
    </div>
  </div>
  <div class="modal fade mt-5" id="modal-sm" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title m-auto">Are you sure you want to cancel this ticket?</h5>
        </div>
        <div class="modal-footer justify-content-around">
          <button type="button" class="btn btn-primary w-25" onclick="ticketCancel()">Ok</button>
          <button type="button" class="btn btn-default w-25" onclick="modalclose()" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
<script>
    let selectTicket = null;
    document.getElementById('tickets_icon').src = 'http://localhost:8000/images/icon_images/ticketingyellow.png';
    document.getElementById('tickets_text').style.color = '#ffc34d';
    function ticketclick(params) {
      console.log(params, 'params')
      selectTicket = params;
      document.getElementById('modal-sm').style.display = 'block';
      document.getElementById('modal-sm').style.opacity = 1;
    }
    function modalclose() {
      document.getElementById('modal-sm').style.display = 'none';
      document.getElementById('modal-sm').style.opacity = 0;
    }
    function ticketCancel() {
      document.getElementById('modal-sm').style.display = 'none';
      document.getElementById('modal-sm').style.opacity = 0;
      console.log(selectTicket);
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "get",
        url: "http://localhost:8000/tickets/ticketCancel",
        data: {
            selectTicket
        },
        success: function(response) {
            window.location.href='http://localhost:8000/tickets';
        }
      })
    }
</script>
@endsection
