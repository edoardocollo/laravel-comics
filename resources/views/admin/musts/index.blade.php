@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > musts</h1>
          <a href="{{route('musts.create')}}"class="btn btn-success">aggiungi aricolo</a>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>titolo</th>
            <th>sottotitolo</th>
            <th>contenuto</th>
            <th>creazione</th>
            <th>update</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($musts as $must)

            <tr>
              <td>{{$must->id}}</td>
              <td>{{$must->titolo}}</td>
              <td>{{$must->sottotitolo}}</td>
              <td>{{$must->contenuto}}</td>
              <td>{{$must->created_at}}</td>
              <td>{{$must->updated_at}}</td>



              <td>
                <form action="{{route('musts.destroy', $must->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-success">delete</button>
                </form>
                <form action="{{route('musts.edit', $must->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">edit</button>
                </form>
                <form action="{{route('musts.show', $must->id )}}" method="get">
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
