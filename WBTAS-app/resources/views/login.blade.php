@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="container">
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email">
            </div> 
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
@endsection
