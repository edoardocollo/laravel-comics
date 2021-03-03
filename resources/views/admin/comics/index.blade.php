@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > comics</h1>
          <a href="{{route('comics.create')}}"class="btn btn-success">aggiungi aricolo</a>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>titolo</th>
            <th>prezzo</th>
            <th>disponibilita'</th>
            <th>descrizione</th>
            <th>serie</th>
            <th>volume</th>
            <th>pagine</th>
            <th>creazione</th>
            <th>update</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($comics as $comic)

            <tr>
              <td>{{$comic->id}}</td>
              <td>{{$comic->titolo}}</td>
              <td>{{$comic->prezzo}}</td>
              <td>{{$comic->disponibilita}}</td>
              <td>{{$comic->descrizione}}</td>
              <td>{{$comic->serie}}</td>
              <td>{{$comic->volume}}</td>
              <td>{{$comic->pagine}}</td>
              <td>{{$comic->created_at}}</td>
              <td>{{$comic->updated_at}}</td>



              <td>
                <form action="{{route('comics.destroy', $comic->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-success">delete</button>
                </form>
                <form action="{{route('comics.edit', $comic->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">edit</button>
                </form>
                <form action="{{route('comics.show', $comic->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">show</button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
          </table>

                  </div>
              </div>
          </div>


@endsection
