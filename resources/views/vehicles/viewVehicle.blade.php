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
              <th scope="col">Route</th>
              <th scope="col">Passengers</th>
              <th scope="col">Image</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($vehicles as $vehicle)
            <tr class="st-5">
              <td>{{$vehicle->id}}</td>
              <td>{{$vehicle->name}}</td>
              <td>{{$vehicle->route}}</td>
              <td>{{$vehicle->passengers}}</td>
              <td><img src="/storage/{{$vehicle->image }}" alt="Image" style="width:200px;height:200px;"></td>
              <td><a href="/admin/update/{{$vehicle->id}}" class="btn btn-danger">Update</a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</section>
<div>



</div>


@endsection