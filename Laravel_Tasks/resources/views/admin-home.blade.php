@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('login-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('login-success') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-success">Total Movies: {{$total_movies}}</button>
                    <button class="btn btn-success">Total User: {{$total_user}}</button>
                    <button class="btn btn-success">Total Admin User: {{$total_admin_user}}</button>
                    <button class="btn btn-success">Total Likes: {{$total_liked}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
