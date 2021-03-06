@extends('layouts.app')

@section('content')
<h1>series > edit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


          <form action="{{route('series.update',$serie)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="serie">serie:</label>
             <input type="text" class="form-control" id="serie" name="serie" value="{{$serie->serie}}">
           </div>

           <div class="form-group">
             <input type="file" name="img" class="form-control">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
