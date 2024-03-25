@extends('layout')
@section('title')

@section('content')
    <form class="container">
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" id="">
            <label for="exampleInputPassword1" class="form-label">Last name</label>
            <input type="text" class="form-control" id="">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" class="form-control" id="">
            <label for="exampleInputPassword1" class="form-label">Email (re-confirm)</label>
            <input type="text" class="form-control" id="">
        </div>
        <a pe="button" class="btn btn-primary">MAKE A BOOKING</a>
    </form>
@endsection
s