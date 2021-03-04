@extends('layouts.guest_app')

@section('main_content')
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
@endsection
