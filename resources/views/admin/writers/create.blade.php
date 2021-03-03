@extends('layouts.app')

@section('content')
<h1>writers > create</h1>

          <form action="{{route('writers.store')}}" method="post" >
            @csrf


           <div class="form-group">
             <label for="nome">nome:</label>
             <input type="text" class="form-control" id="nome" name="nome">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>





@endsection
