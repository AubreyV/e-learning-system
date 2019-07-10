@extends('layouts.app')

@section('css')
<link href="{{ asset('css/admin/categories/create.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container create-category-container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Create Category</h3>
        </div>
        <div class="col-6 text-right">
            <a href="{{ url()->previous() }}" class="btn">
                <i class="fa fa-backward mr-2" aria-hidden="true"></i>Back
            </a>
        </div>
    </div>
    <form class="create-category-form mt-3">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-save-category">Save</button>
        </div>
    </form>
</div>
@endsection