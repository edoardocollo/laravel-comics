@extends('layouts.guest_app')

@section('main_content')


  <section id="comic_carousel">
    <h1>comics & graphic novels</h1>
    <div class="carousel">
      @foreach($comics as $comic)
             <div class="carousel_comic_card">
               <a href="{{route('comics', $comic->id )}}">
                 <img src="storage/{{$comic->img}}" alt="">
               </a>
               <span>{{$comic->titolo}}</span>
               <span>{{$comic->disponibilita?'available now':'not available'}}</span>
             </div>
      @endforeach
    </div>
  </section>



  <section id="must_read">
    <h1>must read</h1>
    <div class="carousel">
      @foreach($musts as $must)
      <div class="carousel_must_card">
        <img src="storage/{{$must->img}}" alt="">
        <span class="subtitle">{{$must->sottotitolo}}</span>
        <span>{{$must->titolo}}</span>
        <p>{{$must->contenuto}}</p>
      </div>
      @endforeach
    </div>
  </section>

  <section id="current_series">
    <h1>current series</h1>
    <div class="carousel">
      @foreach($series as $serie)
      <div class="carousel_serie_card">
        <img src="storage/{{$serie->img}}" alt="">
        <p>{{$serie->serie}}</p>
      </div>
      @endforeach
    </div>
  </section>



@endsection
