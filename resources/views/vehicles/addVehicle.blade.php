@extends('layoutAdmin')
@section('content')

<section class="">
    <div class="container  full-height">
        <div class="row justify-content-center">
            <div class="form-group col-md-9">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/admin/addVehicle" method="post" enctype="multipart/form-data" id="addroom-form"
                    class="st-1">
                    {{ csrf_field() }}
                    <label for="Price">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Toyota">

                    <label for="Description">Route</label>
                    <input class="form-control" name="route" type="text">

                    <label for="Description">Passengers</label>
                    <input class="form-control" name="passengers" type="text">

                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
              
            </div>
        </div>
    </div>
</section>

@endsection