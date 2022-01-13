@extends('layout')
@section('content')

<section>
  <div class="container">
    <h2>My Bookings</h2>
    <table class="table table-borderless st-2">
      <thead>
        <tr>
        <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Contact no</th>
          <th scope="col">NIC</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
      @foreach($bookingDetails as $bookingDetail)
        <tr>
          <td>{{$bookingDetail->id}}</td>
          <td>{{$bookingDetail->first_name}} {{$bookingDetail->last_name}}</td>
          <td>{{$bookingDetail->address}}</td>
          <td>{{$bookingDetail->contact_no}}</td>
          <td>{{$bookingDetail->nic}}</td>
          <td><img src="/storage/{{$bookingDetail->image }}" alt="Image" style="width:200px;height:200px;"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endsection