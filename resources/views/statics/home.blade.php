<!DOCTYPE html>
@extends('app')

@section('title', 'Home')

@section('body')
  <div>
    <h1>Welcome to the Sample App</h1>
    <h2>
      This is the home page for the
      <a href="https://laravel.com/docs/5.8">laravel 5.8 Instration</a>
      sample application.
    </h2>
    <a class="btn btn-lg btn-primary" href="#">Sing up now!</a>
  </div>
  <a href="https://laravel.com/"><img alt="Laravel Logo" src={{ asset('img/laravel_logo.png')}} /></a>
@endsection

