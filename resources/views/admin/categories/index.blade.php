@extends('layouts.app')

@section('css')
<link href="{{ asset('css/admin/categories/index.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5">
    <a href="{{ route('admin.categories.create') }}" class="btn btn-create-category">Create Category</a>
    <table class="table table-striped text-center mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Options</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Static title</td>
                <td>Static description</td>
                <td>Static option</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection