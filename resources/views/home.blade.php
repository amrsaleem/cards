

@extends('main')

@section('content')
<div class="content">
<a name="add" id="add" class="btn btn-primary" href="/cards/create" role="button">Add Card </a>

<div class="row">
        @foreach ($cards as $card)
        <div class="col-sm-4">

            <div class="card" >
                    <a href="/card/{{$card->id}}"></a>
                  <div class="wrapper">
                    <img src="https://source.unsplash.com/random" alt="product" style="width:100%; height: 300px;">
                  </div>
                    <div class="cardtext">
                    <small id="helpId" class="form-text text-muted">{{$card->title}}</small>
                    <h4><b>{{$card->description}}</b></h4>
                    </div>

                </div>
      </div>
        @endforeach



        <!--row-->
</div>
</div>
@endsection





