@extends('layouts.guest_app')

@section('main_content')
<div id="main_container">
  <nav id="area_nav" class="col-xl-12 col-md-12 col-xs-12"></nav>
  <nav id="main_nav">
    <img src="storage/posts_img/logo.png" alt="">
    <ul>
      <li>characters</li>
      <li>comics</li>
      <li>movies</li>
      <li>tv</li>
      <li>games</li>
      <li>videos</li>
      <li>news</li>
      <li>shop</li>
    </ul>
  </nav>
  <section id="comic_carousel">
    <h1>comics & graphic novels</h1>
    <div class="carousel">
      @foreach($comics as $comic)
      <div class="carousel_comic_card">
        <img src="storage/{{$comic->img}}" alt="">
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
        <span>{{$must->sottotitolo}}</span>
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
      <div class="carousel_must_card">
        <img src="storage/{{$serie->img}}" alt="">
        <span>{{$serie->serie}}</span>
      </div>
      @endforeach
    </div>
  </section>
</div>
@endsection
