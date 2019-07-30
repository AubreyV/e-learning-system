@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/words/create.css') }}">    
@endsection

@section('content')
<div class="container word-create-container my-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3>{{ $category->title }} | Add Word</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn">
                        <i class="fa fa-backward mr-2" aria-hidden="true"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.words.store', compact('category')) }}" method="POST" class="mt-3">
                @csrf
                <div class="form-group row">
                    <label class="col-form-label col-2 offset-2 text-center" for="word">Content</label>
                    <input type="text" class="form-control col-6" id="word" name="word[content]">
                </div>
                <div class="form-group row">
                    <div class="col-2 offset-2 text-center">
                        <label class="col-form-label" for="choices">Choices</label>
                    </div>
                    <div class="col-6 choices">
                        @for ($i = 0; $i < 4; $i++)
                            @include('admin.words.partials.choices', compact('i'))
                        @endfor
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-save-word">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.choices input[type=checkbox]').change(function() {
            $(".choices input[type=checkbox]:checked").not(this).prop('checked', false);
        });
    });
</script>
@endsection