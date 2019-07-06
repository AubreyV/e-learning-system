@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container home-container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="avatar">
                        <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="avatar">
                    </div>

                    <h3>{{ Auth::user()->name }}</h3>
                    <h6>{{ Auth::user()->email }}</h6>

                    <a class="btn btn-view-profile mt-3" href="">View Profile</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body text-center">
                    <span class="font-weight-bold"> 0 </span> <span class="mr-3"> followers </span>
                    <span class="ml-3 font-weight-bold"> 0 </span> <span> following </span>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body text-center">
                   <a href="" class="px-5 py-3 btn btn-words-learned"><span class="font-weight-bold"> 0 </span> <span class="d-block"> words learned </span></a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ACTIVITY FEED</div>

                <div class="card-body text-muted">
                    Nothing to show.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
