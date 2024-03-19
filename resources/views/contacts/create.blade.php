@extends('layouts.master')
@section('content')
    <h1> Create New Contact </h1>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form action="{{ route('contacts.store') }}" method="post">
                
                @include('contacts._form')
                
                <hr>
                <button class="btn btn-primary">
                    Create contact
                </button>
                <a href="{{ route('contacts') }}" class ="btn btn-primary">
                    Cancel
                </a>

            </form>
        </div>
    </div>
@endsection