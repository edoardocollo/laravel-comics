@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>artists > edit</h1>

          <form action="{{route('artists.update',$artist)}}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="nome">nome:</label>
             <input type="text" class="form-control" id="nome" name="nome" value="{{$artist->nome}}">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
