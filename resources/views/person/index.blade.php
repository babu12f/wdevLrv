@extends('layout')

@section('title', ' List of Person')

@section('content')
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>@id</th>
                    <th>Name</th>
                    <th>FatherName</th>
                    <th></th>
                </tr>
                @foreach ($persons as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->father_name}}</td>
                        <td> 
                            <a href="/persons/{{$p->id}}/edit" class="btn btn-sm btn-info">Edit</a> | 
                            <a href="/persons/{{$p->id}}/delete" class="btn btn-sm btn-danger">Delete</a>
                         </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection