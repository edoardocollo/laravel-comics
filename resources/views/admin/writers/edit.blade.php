@extends('layouts.app')

@section('content')
<h1>writers > edit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


          <form action="{{route('writers.update',$writer)}}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="nome">nome:</label>
             <input type="text" class="form-control" id="nome" name="nome" value="{{$writer->nome}}">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
