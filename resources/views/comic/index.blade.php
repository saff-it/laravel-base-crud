@extends('layouts.main')

@section('main-content')

<div class="card" style="width: 18rem;">
    <img src="{{$comic -> thumb}}" class="card-img-top" alt="{{$comic -> title}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic -> title}}</h5>
      <p class="card-text">{{$comic -> description}}</p>
    </div>
  </div>

@endsection