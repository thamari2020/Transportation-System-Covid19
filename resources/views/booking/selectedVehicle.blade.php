@extends('layout')
@section('content')


<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/checkVehicle/{{$selectedVehicleData->id}}" method="post" enctype="multipart/form-data"
                    id="addroom-form" class="st-1">
                    {{ csrf_field() }}
                    <h5>
                        {{$selectedVehicleData->name}}
                    </h5>
                    <br>
                    <img src="/storage/{{$selectedVehicleData->image }}" alt="Image">
                    <br>

                    <h5>
                        Route: {{$selectedVehicleData->route}}
                    </h5>
                    <h5>
                        Passengers: {{$selectedVehicleData->passengers}}
                    </h5>

                    <label for="date">Check Availability</label>
                    <input type="date" class="form-control" name="date">

                    <script>
                        var today = new Date().toISOString().split('T')[0];
                        document.getElementsByName("date")[0].setAttribute('min', today)</script>
                        
                    <button type="submit" class="btn btn-primary">Check</button>
                    <br>
                    <br>

                </form>
            </div>
        </div>

    </div>
</section>




@endsection