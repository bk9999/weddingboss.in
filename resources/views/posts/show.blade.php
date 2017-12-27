@extends('layouts.master')

@section('title','View Post')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>{{$title}}</h1>
    <br>
    <p>
      {{$body}}
    </p>
  </div>
</div>
@endsection
