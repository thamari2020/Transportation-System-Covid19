@extends('layoutAdmin')
@section('content')

<section class="">
    <div class="container full-height">
        <div class="row">
            <div class="col-md-9">
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <form action="/admin/updateVehicle" method="post" enctype="multipart/form-data" id="addroom-form"
                    class="st-1">
                    {{ csrf_field() }}

                    <input type="hidden" class="form-control" name="id" value="{{$updateVehicleData->id}}">

                    <label for="Price">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$updateVehicleData->name}}">

                    <label for="Description">Route</label>
                    <input class="form-control" name="route" type="text" value="{{$updateVehicleData->route}}">

                    <label for="Description">Passengers</label>
                    <input class="form-control" name="passengers" type="text"
                        value="{{$updateVehicleData->passengers}}">

                    <label for="image">Image</label>
                    <img src="/storage/{{$updateVehicleData->image}}" alt="Image" style="width:200px;height:200px;">
                    <input type="file" class="form-control" name="image" value="{{$updateVehicleData->image}}">

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
               
            </div>
        </div>
    </div>
</section>

@endsection