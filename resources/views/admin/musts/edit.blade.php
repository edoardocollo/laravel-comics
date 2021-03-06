@extends('layouts.app')

@section('content')
<h1>musts > edit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


          <form action="{{route('musts.update',$must)}}" method="post" enctype="multipart/form-data">
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


           <div class="form-group">
             <label for="img">img:</label>
             <input type="file" class="form-control" id="img" name="img">
           </div>



           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
