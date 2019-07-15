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
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <button class="btn btn-add"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    <button class="btn btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection