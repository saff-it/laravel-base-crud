@extends('layouts.main')

@section('main-content')

<section>

  @if ( session('delete'))
  <div class="alert" role="alert">
     {{ session('delete') }} è stato cancellato per sempre.
  </div>   
  @endif

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
                    <a href="{{ route('comics.show', $comic -> id) }}">
                        {{$comic -> title}}
                    </a>
                    
                </td>
                <td>{{$comic -> price}}</td>
                <td>{{$comic -> sale_date}}</td>
                <td>{{$comic -> type}}</td>
                <td><button> <a href="{{route('comics.edit', $comic->id)}}"> Edit</a></button></td>
                <td>
                  <form class="delete-item" action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                  </form>
                </td>             
              
            </tr>
        @endforeach
    </tbody>
  </table>
</section>
@endsection

@section('footer-script')
  <script>
    const deletedItems = document.querySelectorAll('.delete-item');
    deletedItems.forEach(
      deletedItem => {
        deletedItem.addEventListener('submit', function(event){
          event.preventDefault();
          const result = window.confirm('Vuoi davvero cancellare?');
          if (result) this.submit();
        })
    });

  </script>


@endsection
