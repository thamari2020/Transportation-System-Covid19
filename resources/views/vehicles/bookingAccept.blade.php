@extends('layoutAdmin')
@section('content')


@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif
 
<section class="">
  <div class="container full-height">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Booking Date</th>
              <th scope="col">Address</th>
              <th scope="col">Contact no</th>
              <th scope="col">NIC</th>
              <th scope="col">Image</th>
              <th scope="col">Approve</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bookings as $bookingDetail)
            <tr class="st-5">
              <td>{{$bookingDetail->id}}</td>
              <td>{{$bookingDetail->first_name}} {{$bookingDetail->last_name}}</td>
              <td>{{$bookingDetail->booking_date}}</td>
              <td>{{$bookingDetail->address}}</td>
              <td>{{$bookingDetail->contact_no}}</td>
              <td>{{$bookingDetail->nic}}</td>
              <td><img src="/storage/{{$bookingDetail->image }}" alt="Image" style="width:100px;height:100px;"></td>
              <td>
                @if(!$bookingDetail->status)
                <a href="/admin/approveBooking/{{$bookingDetail->id}}" class="btn btn-danger">Approve Request</a>
                @else
                Approved
              </td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</section>
@endsection