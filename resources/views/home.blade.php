@extends('layouts.main')

@section('main-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic -> id}}</th>
                <td>
                    <a href="{{ route('comics', $comic -> id) }}">
                        {{$comic -> title}}
                    </a>
                    
                </td>
                <td>{{$comic -> price}}</td>
                <td>{{$comic -> sale_date}}</td>
                <td>{{$comic -> type}}</td>
            </tr>
        @endforeach
      
      
    </tbody>
  </table>

@endsection
