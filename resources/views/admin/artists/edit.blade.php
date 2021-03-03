@extends('layouts.app')

@section('content')
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
