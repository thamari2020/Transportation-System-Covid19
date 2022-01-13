@extends('layout')
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
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($vacancies as $vacancy)
            <tr class="st-5">
              <td>{{$vacancy->id}}</td>
              <td>{{$vacancy->title}}</td>
              <td>{{$vacancy->description}}</td>
              <td><a href="/applyVacancy/{{$vacancy->id}}" class="btn btn-danger">Apply</a> </td>
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