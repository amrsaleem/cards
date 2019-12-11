@extends('main')
@section('content')
    <div class="container">


    <form action="/cards/create" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="title" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="description" aria-describedby="desc">
      <small id="desc" class="text-muted">this is desc</small>
      <br>
      <label for="file">image</label>
        <br>
      <input type="file" name="image" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
