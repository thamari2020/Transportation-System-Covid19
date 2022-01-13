@extends('layout')
@section('content')

<script>
    var config = <?php echo json_encode($config); ?>;
    alert(JSON.stringify(config))
</script>

<section>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h4><i>Booking Date: {{$date}}</i></h4>
            <div class="">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('bookVehicle',[
                'date' => $date,'id' => $id]) }}" enctype="multipart/form-data" class="st-1">
                    {{ csrf_field() }}
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name">

                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name">

                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address">

                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" name="contact_no">

                    <label for="nic">NIC</label>
                    <input type="text" class="form-control" name="nic">

                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    <div id="paypal-button-container"></div>

                    <button type="submit" class="btn btn-primary" id="pay-only" disabled>Save</button>

                </form>
            </div>
        </div>
    </div>
</section>


@endsection