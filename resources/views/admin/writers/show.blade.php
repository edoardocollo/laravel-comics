@extends('layouts.app')

@section('content')
<h1>show</h1>
<h2>{{$writer->nome}}</h2>
<p>{{$writer->created_at}}</p>
<p>{{$writer->updated_at}}</p>
@endsection
