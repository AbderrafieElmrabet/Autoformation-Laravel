@extends('adminlte::page')

@section('title', 'Dashboard') {{-- Title of the page --}}

@section('content_header')
<h1>Dashboard</h1> {{-- Page header --}}
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Articles List</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- Example data --}}
                <tr>
                    <td>1</td>
                    <td>My First Article</td>
                    <td>
                        <a href="{{ route('articles.create') }}" class="btn btn-success">Add Article</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection