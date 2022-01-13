@extends('layout')
@section('content')
<section>

@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif
 
  <div class="container">
    <div class="row">
      @foreach($vehicles as $vehicle)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card-cont">
            <div class="my-card st-1 st-1-h">
              <img class="" src="/storage/{{$vehicle->image }}" alt="Card image cap" style="width:100%;height:200px;">
              <div class="">
                <h5 class="">{{$vehicle->name}}</h5>
                <ul class="">
                <li class="">{{$vehicle->route}}</li>
                <li class="">{{$vehicle->passengers}}</li>
              </ul>
              </div>
              <div class="">
                <a href="/selectedVehicle/{{$vehicle->id}}" class="card-link">Book Your Seats</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
