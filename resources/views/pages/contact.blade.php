@extends('layouts.master')

@section('title','Contact Us')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Contact Us</h1>
    <hr>
    <form class="" action="#" method="post">
      <div class="form-group">
        <label for="from_email">From</label>
        <input name="from_email" type="email" class="form-control" id="from_email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input name="subject"type="text" class="form-control" id="subject" placeholder="Subject">
      </div>
      <div class="form-group">
        <label for="message">Message</label><br>
        <textarea name="message" rows="8" cols="90" id="message"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
