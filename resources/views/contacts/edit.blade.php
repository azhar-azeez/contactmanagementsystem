@extends('layouts.master')
@section('content')
    <h1> Edit Contact </h1>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                    @method('PUT')
                    @include('contacts._form')
                    <hr>
                    <button class="btn btn-primary">
                        Update contact
                    </button>
                    <a href="{{ route('contacts') }}" class ="btn btn-primary">
                        Cancel
                    </a>
            </form>
        </div>
    </div>

@endsection