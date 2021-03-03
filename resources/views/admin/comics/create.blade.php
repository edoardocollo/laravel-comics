@extends('layouts.app')

@section('content')
<h1>comics > create</h1>

          <form action="{{route('comics.store')}}" method="post">
            @csrf


           <div class="form-group">
             <label for="titolo">titolo:</label>
             <input type="text" class="form-control" id="titolo" name="titolo">
           </div>



           <div class="form-group">
             <label for="prezzo">prezzo:</label>
             <input type="numbers" class="form-control" id="prezzo" name="prezzo">
           </div>



           <div class="form-group">
             <label for="disponibilita">disponibilita:</label>
             <input type="checkbox" class="form-control" id="disponibilita" name="disponibilita">
           </div>


           <div class="form-group">
             <label for="descrizione">descrizione:</label>
             <input type="text" class="form-control" id="descrizione" name="descrizione">
           </div>


           <div class="form-group">
             <label for="serie">serie:</label>
             <input type="text" class="form-control" id="serie" name="serie">
           </div>


           <div class="form-group">
             <label for="volume">volume:</label>
             <input type="numbers" class="form-control" id="volume" name="volume">
           </div>


           <div class="form-group">
             <label for="pagine">pagine:</label>
             <input type="numbers" class="form-control" id="pagine" name="pagine">
           </div>

           
           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>





@endsection
