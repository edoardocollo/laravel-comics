@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > series</h1>
          <a href="{{route('series.create')}}"class="btn btn-success">aggiungi serie</a>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>serie</th>
            <th>action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($series as $serie)

            <tr>
              <td>{{$serie->id}}</td>
              <td>{{$serie->serie}}</td>



              <td>
                <form action="{{route('series.destroy', $serie->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-success">delete</button>
                </form>
                <form action="{{route('series.edit', $serie->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">edit</button>
                </form>
                <form action="{{route('series.show', $serie->id )}}" method="get">
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
