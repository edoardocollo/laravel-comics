@extends('layouts.guest_app')

@section('main_content')
<div class="jumbo_comics" style="background-image: url('../storage/{{$comic->jumbo}}')">

</div>


<div class="header_comics">
  <div class="header_comics_wrap">
    <img src="../storage/{{$comic->img}}" alt="">
  </div>
</div>

<div class="comics_content_wrap">
  <div class="comics_content_container">
    <h1>{{$comic->titolo}}</h1>
    <div class="price_box">
      <div class="left">
        <span>U.S. Price: {{$comic->prezzo}}</span>
        <span>{{$comic->disponibilita === 1 ? 'available' : 'not available'}}</span>
      </div>
      <div class="right">
        Check Availability
      </div>
    </div>
    <p>{{$comic->descrizione}}</p>
  </div>
</div>


<section class="talent_specs">
  <div class="talent_specs_container">
    <div class="talents_wrap">
      <h3>Talent</h3>

      <div class="talent_specs_row">
        <span>Art by: </span><span>
          @foreach($comic->artists as $artist)
          {{$artist->nome}}
          @endforeach
        </span>
      </div>

      <div class="talent_specs_row">
        <span>Written by: </span><span>
          @foreach($comic->writers as $writer)
          {{$writer->nome}}
          @endforeach
        </span>
      </div>

    </div>
    <div class="specs_wrap">
      <h3>Specs</h3>

      <div class="talent_specs_row">
        <span>Series: </span><span>{{$comic->serie}}</span>
      </div>

      <div class="talent_specs_row">
        <span>U.S Price: </span><span>{{$comic->prezzo}}</span>
      </div>

      <div class="talent_specs_row">
        <span>On Sale Date: </span><span>{{$comic->created_at}}</span>
      </div>

      <div class="talent_specs_row">
        <span>Volume/Issue #: </span><span>{{$comic->volume}}</span>
      </div>

      <div class="talent_specs_row">
        <span>Trim Size: </span><span>6 5/8 x 10 3/16</span>
      </div>

      <div class="talent_specs_row">
        <span>Page Count: </span><span>{{$comic->pagine}}</span>
      </div>

      <div class="talent_specs_row">
        <span>Rated: </span><span>Teen</span>
      </div>

    </div>
  </div>
</section>

@endsection
