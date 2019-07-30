@extends('layouts.app')

@section('css')
<link href="{{ asset('css/admin/categories/show.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 category-title">
                    <span>Category #{{ $category->id }}: {{ $category->title }}</span>
                </div>
                <div class="col-6 text-right add-word">
                    <a href="{{ route('admin.categories.words.create', compact('category')) }}" class="btn btn-add-word"><i class="fa fa-plus-square"></i> word</a>
                </div>
            </div>
        </div>
        <div class="card-body mb-4">
            <p class="card-text blockquote-footer">{{ $category->description }}</p>
        </div>
        <table class="table text-center">
            <tbody>
                <tr>
                    <th>Words</th>
                    <th>Answers</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>one</td>
                    <td>ichi</td>
                    <td>
                        <button class="btn btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button class="btn btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection