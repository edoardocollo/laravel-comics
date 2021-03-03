@extends('layouts.app')

@section('content')
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
