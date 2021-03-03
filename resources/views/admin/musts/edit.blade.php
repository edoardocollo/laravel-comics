@extends('layouts.app')

@section('content')
<h1>musts > edit</h1>

          <form action="{{route('musts.update',$must)}}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="titolo">titolo:</label>
             <input type="text" class="form-control" id="titolo" name="titolo" value="{{$must->titolo}}">
           </div>



           <div class="form-group">
             <label for="sottotitolo">sottotitolo:</label>
             <input type="text" class="form-control" id="sottotitolo" name="sottotitolo" value="{{$must->sottotitolo}}">
           </div>



           <div class="form-group">
             <label for="contenuto">contenuto:</label>
             <input type="text" class="form-control" id="contenuto" name="contenuto" value="{{$must->contenuto}}">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
