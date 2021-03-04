@extends('layouts.app')

@section('content')
<h1>series > edit</h1>
          <form action="{{route('series.update',$serie)}}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="serie">serie:</label>
             <input type="text" class="form-control" id="serie" name="serie" value="{{$serie->serie}}">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
