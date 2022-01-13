@extends('layout')
@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h4><i>{{$vacancyId}}</i></h4>
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
                <form method="POST" action="{{ route('storeApplicantDetails',[
                'vacancyId' => $vacancyId ]) }}" enctype="multipart/form-data" class="st-1">
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

                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" type="text"></textarea>
                   
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
</section>



@endsection