<!DOCTYPE html>
@extends('app')

@section('title', 'Home')

@section('body')
<div class="center jumbotron">
  <h1>Welcome to the Sample App</h1>
  <h2>
    This is the home page for the
    <a href="https://laravel.com/docs/5.8">laravel 5.8 Instration</a>
    sample application.
  </h2>
  <a class="btn btn-lg btn-primary" href="#">Sing up now!</a>
</div>
<a id="laravel-logo" href="https://laravel.com/"><img alt="Laravel Logo" src={{ asset('img/laravel_logo.png')}} /></a>
@endsection

