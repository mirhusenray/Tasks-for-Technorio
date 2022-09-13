@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <button class="btn btn-success">Add Movie</button>
            <br><br>
            <div class="card">
                <div class="card-header">Movie List</div>

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

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Post</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection