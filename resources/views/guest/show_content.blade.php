@extends('layouts.guest_app')

@section('main_content')
<div class="jumbo_comics">

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
        <span>{{$comic->disponibilita}}</span>
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

    </div>
    <div class="specs_wrap">
      <h3>Specs</h3>
      <span>Series: {{$comic->serie}}</span>
      <span>U.S Price: {{$comic->prezzo}}</span>
      <span>On Sale Date: {{$comic->created_at}}</span>
      <span>Volume/Issue #: {{$comic->volume}}</span>
      <span>Trim Size: 6 5/8 x 10 3/16</span>
      <span>Page Count: {{$comic->pagine}}</span>
      <span>Rated: Teen</span>
    </div>
  </div>
</section>

@endsection
