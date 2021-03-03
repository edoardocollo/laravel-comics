@extends('layouts.app')

@section('content')
<h1>show</h1>

<h2>{{$comic->titolo}}</h2>
<p>{{$comic->prezzo}}</p>
<p>{{$comic->disponibilita}}</p>
<p>{{$comic->descrizione}}</p>
<p>{{$comic->serie}}</p>
<p>{{$comic->volume}}</p>
<p>{{$comic->pagine}}</p>
<p>{{$comic->created_at}}</p>
<p>{{$comic->updated_at}}</p>
@endsection
