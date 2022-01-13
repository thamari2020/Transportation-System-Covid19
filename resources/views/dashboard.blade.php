@extends('layoutAdmin')
@section('content')

@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif
 
<section>
    <div class="container full-height">
        <br />
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Hey! you are admin.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection