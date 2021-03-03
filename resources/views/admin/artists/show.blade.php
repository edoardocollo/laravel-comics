@extends('layouts.app')

@section('content')
<h1>show</h1>
<h2>{{$artist->nome}}</h2>
<p>{{$artist->created_at}}</p>
<p>{{$artist->updated_at}}</p>
@endsection
