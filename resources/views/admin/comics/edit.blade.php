@extends('layouts.app')

@section('content')
<h1>comics > edit</h1>

          <form action="{{route('comics.update',$comic)}}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
             <label for="titolo">titolo:</label>
             <input type="text" class="form-control" id="titolo" name="titolo" value="{{$comic->titolo}}">
           </div>



           <div class="form-group">
             <label for="prezzo">prezzo:</label>
             <input type="numbers" class="form-control" id="prezzo" name="prezzo" value="{{$comic->prezzo}}">
           </div>



           <div class="form-group">
             <label for="disponibilita">disponibilita:</label>
             <input type="checkbox" class="form-control" id="disponibilita" name="disponibilita">
           </div>


           <div class="form-group">
             <label for="descrizione">descrizione:</label>
             <input type="text" class="form-control" id="descrizione" name="descrizione" value="{{$comic->descrizione}}">
           </div>


           <div class="form-group">
             <label for="serie">serie:</label>
             <input type="text" class="form-control" id="serie" name="serie" value="{{$comic->serie}}">
           </div>


           <div class="form-group">
             <label for="volume">volume:</label>
             <input type="numbers" class="form-control" id="volume" name="volume" value="{{$comic->volume}}">
           </div>


           <div class="form-group">
             <label for="pagine">pagine:</label>
             <input type="numbers" class="form-control" id="pagine" name="pagine" value="{{$comic->pagine}}">
           </div>


           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection
