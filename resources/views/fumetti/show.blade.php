@extends("layouts.app")


@section("content")


<div class="container">
    <div class="row">
        <h2>fumetto scelto</h2>
    </div>
    <div class="row">

        <p>{{$detail->title}}</p>
        <img src="{{$detail->thumb}}" alt="">

    </div>
</div>

@endsection