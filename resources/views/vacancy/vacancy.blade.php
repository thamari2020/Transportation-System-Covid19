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
                <form method="post" action="/admin/storeVacancy" enctype="multipart/form-data" id="addroom-form"
                    class="st-1">
                    {{ csrf_field() }}
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" name="title">

                    <label for="Description">Description</label>
                    <textarea class="form-control" name="description" type="text"></textarea>

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
              
            </div>
        </div>
    </div>
</section>

@endsection