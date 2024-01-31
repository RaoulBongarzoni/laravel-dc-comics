@extends('layouts.app')


@section('content')
<div class="container">
    <form action="http://127.0.0.1:8000/comics" method="POST">
        @csrf


        <div class="row">
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
        </div>






        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection