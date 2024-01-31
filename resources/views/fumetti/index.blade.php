@extends('layouts.app')

@section('content')
<p>This is my paragraph content.</p>
<div class="container">
    <div class="row">
        @foreach ($products as $item)
        <div class="col-3">
            <div class="card">
                <img src="{{$item->thumb}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection