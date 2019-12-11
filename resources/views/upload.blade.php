@extends('main')

@section('content')
<div class="content">
    <form action="/store" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
    <div class="col-lg-offset-4 col-lg-4" >
      <input type="file" name="image"  class="form-control" >
      <br>
        <input type="submit" value="Upload">
    </form>
    </div>
</div>
@endsection
