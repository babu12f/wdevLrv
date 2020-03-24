@extends('layout')

@section('title', 'Add Person')

@section('css')
<style>
    .navbar-brand {
        color: green !important;
    }
</style>
@endsection

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/persons/{{$person->id}}/edit" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{$person->name}}">
            </div>

            <div class="form-group">
                <label for="father_name">Father Name</label>
                <input id="father_name" type="text" class="form-control" name="father_name" value="{{$person->father_name}}">
            </div>

            <button type="submit" class="btn btn-primary">Save Person</button>
        </form>
    </div>  
@endsection