@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <a href="{{route('comics.index')}}" class="btn btn-primary">comics</a>
          <a href="{{route('musts.index')}}" class="btn btn-primary">must read</a>
          <a href="{{route('artists.index')}}" class="btn btn-primary">artists</a>
          <a href="{{route('writers.index')}}" class="btn btn-primary">writers</a>
          <a href="{{route('series.index')}}" class="btn btn-primary">series</a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
