@extends('layouts.master')
@section('content')
<h1>Welcome to contacts manager</h1>
        <p> This is a custom system designed to store your contacts files. In here we can store, 
            update and delete contacts as preffered</p>

            <a href="{{route('login')}}" class="btn btn-primary">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary">Register</a>
@endsection