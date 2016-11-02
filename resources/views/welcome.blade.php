@extends('layouts.index')

@section('style')
  <link href="{{elixir('css/app.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="docs-face-container">

    <a href="{{url('laravel')}}" class="docs-face" id="laravel">
      <img src="/static/laravel/image/logo-white.png">
      <span>laravel</span>
      <hr>
      <p>The PHP Framework For Web Artisans</p>
    </a>
    <a href="{{url('laravel')}}" class="docs-face" id="laravel">laravel</a>
    <a href="{{url('laravel')}}" class="docs-face" id="laravel">laravel</a>

  </div>

  <div class="docs-face-container">
    <a href="{{url('laravel')}}" class="docs-face" id="laravel">laravel</a>
  </div>
@endsection
