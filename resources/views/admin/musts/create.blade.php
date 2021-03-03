@extends('layouts.app')

@section('content')
<h1>musts > create</h1>

          <form action="{{route('musts.store')}}" method="post">
            @csrf


           <div class="form-group">
             <label for="titolo">titolo:</label>
             <input type="text" class="form-control" id="titolo" name="titolo">
           </div>



           <div class="form-group">
             <label for="sottotitolo">sottotitolo:</label>
             <input type="text" class="form-control" id="sottotitolo" name="sottotitolo">
           </div>



           <div class="form-group">
             <label for="contenuto">contenuto:</label>
             <input type="text" class="form-control" id="contenuto" name="contenuto">
           </div>

           
           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>





@endsection
