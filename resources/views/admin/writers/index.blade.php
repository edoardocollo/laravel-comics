@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > writers</h1>
          <a href="{{route('writers.create')}}"class="btn btn-success">aggiungi writer</a>
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
          @foreach ($writers as $writer)

            <tr>
              <td>{{$writer->id}}</td>
              <td>{{$writer->nome}}</td>
              <td>{{$writer->created_at}}</td>
              <td>{{$writer->updated_at}}</td>



              <td>
                <form action="{{route('writers.destroy', $writer->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-success">delete</button>
                </form>
                <form action="{{route('writers.edit', $writer->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-success">edit</button>
                </form>
                <form action="{{route('writers.show', $writer )}}" method="get">
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
