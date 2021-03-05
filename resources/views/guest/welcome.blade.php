@extends('layouts.guest_app')

@section('main_content')


  <section id="comic_carousel">
    <h1>comics & graphic novels</h1>
    <div class="carousel">
      @foreach($comics as $comic)
      <div class="carousel_comic_card">
        <img src="storage/{{$comic->img}}" alt="">
        <span>{{$comic->titolo}}</span>
        <span>{{$comic->disponibilita?'available now':'not available'}}</span>
        <form action="{{route('comics', $comic->id )}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">show</button>
        </form>
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



@endsection
