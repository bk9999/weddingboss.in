@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  <p>
    <strong>Success: </strong>
    {{Session::get('success')}}
  </p>
</div>
@endif

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
  <p>
    <strong>Errors:</strong><br>
    @foreach($errors->all() as $error)
      <ul>
        <li>{{$error}}</li>
      </ul>
    @endforeach
  </p>
</div>
@endif
