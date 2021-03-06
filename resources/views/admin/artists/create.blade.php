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


<h1>artists > create</h1>

          <form action="{{route('artists.store')}}" method="post" >
            @csrf


           <div class="form-group">
             <label for="titolo">nome:</label>
             <input type="text" class="form-control" id="nome" name="nome">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>





@endsection
