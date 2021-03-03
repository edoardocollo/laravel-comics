@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > artists</h1>
          <a href="{{route('artists.create')}}"class="btn btn-success">aggiungi artista</a>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>nome</th>
            <th>creazione</th>
            <th>update</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($artists as $artist)

            <tr>
              <td>{{$artist->id}}</td>
              <td>{{$artist->nome}}</td>
              <td>{{$artist->created_at}}</td>
              <td>{{$artist->updated_at}}</td>



              <td>
                <form action="{{route('artists.destroy', $artist->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-success">delete</button>
                </form>
                <form action="{{route('artists.edit', $artist->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">edit</button>
                </form>
                <form action="{{route('artists.show', $artist->id )}}" method="get">
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
