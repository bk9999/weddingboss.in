@extends('layouts.master')

@section('title','Create Post')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    <form class="" action="{{route('posts.store')}}"method="post">
      <div class="form-group">
        <label for="postTitle">Title:</label><br>
        <input id="postTitle" class="form-control" type="text" name="title" value="" placeholder="Title of post">
      </div>
      <div class="form-group">
        <label for="postBody">Body:</label><br>
        <textarea id="postBody" name="body" rows="8" cols="90" placeholder="Body of post"></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success btn-block">Create Post</button>
      {{csrf_field()}}
    </form>
  </div>
</div>
@endsection
