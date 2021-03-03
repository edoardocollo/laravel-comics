@extends('layouts.app')

@section('content')
<h1>show</h1>

<h2>{{$must->titolo}}</h2>
<p>{{$must->sottotitolo}}</p>
<p>{{$must->contenuto}}</p>
<p>{{$must->created_at}}</p>
<p>{{$must->updated_at}}</p>
@endsection
