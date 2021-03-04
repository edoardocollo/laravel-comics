@extends('layouts.app')

@section('content')
<h1>series > create</h1>

          <form action="{{route('series.store')}}" method="post" enctype="multipart/form-data" >
            @csrf


           <div class="form-group">
             <label for="serie">serie:</label>
             <input type="text" class="form-control" id="serie" name="serie">
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
