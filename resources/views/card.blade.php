@extends('main')

@section('content')
<div class="container">
<a name="add" id="add" class="btn btn-primary" href="/card/{{$card->id}}/edit" role="button">Edit </a>

<form action="/cards/{{$card->id}}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>

</form>
<img src="{{Storage::url($card->image)}}" width="300px" height="200px">
<h2>{{$card->title}}</h2>

<a>{{$card->description}}</a>
</div>
@endsection

