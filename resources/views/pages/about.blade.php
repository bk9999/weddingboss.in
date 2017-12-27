@extends('layouts.master')

@section('title','About Us')

@section('contentCSS')
<style media="screen">
.card .user-image {
	width: 200px;
	height: 200px;
	margin-bottom: 1.6rem;
	overflow: hidden;
	border-radius: 50%;
	margin: 0 auto 2rem auto;
}
  .card .user-image i{
  font-size: 150px;
}
.card img{
  width:275px;
}
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>About Us</h1>
    <br>
    <div class="card text-center">
      <div class="user-image img-cirlce">
        <img src="images/bk.jpg" alt="">
      </div>
      <div class="bio">
        Hi, this is me and this space is mine. I come here whenever I am free. Developing sites like this is my hobby. I have done master's in computer application and doing full time software development in Gurugram.
        I live in Delhi,India. 
      </div>
      <div class="info">
        <h2><strong>Bhasker Thapa</strong></h2>
        <p>DEVELOPER</p>
      </div>
    </div>
  </div>
</div>
@endsection
