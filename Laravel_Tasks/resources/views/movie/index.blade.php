@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-md-12">
            <a href="{{route('movies.create')}}">
                <button class="btn btn-success">Add Movie</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">Movie List</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Poster</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($movies as $key=>$data)
                            <tr>
                                <th scope="row">{{$key++}}</th>
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->release_date}}</td>
                            
                                <td>
                                                @if ($data->status == '1')
                                                <button class="btn btn-success">Published</button>
                                                @elseif($data->status== '0')
                                                <button class="btn btn-danger">Un-Published</button>
                                           
                                            @else
                                            @endif
                                            
                                            </td>
                                <td>
                                    <img src="{{ asset('uploads/' . $data->poster) }}" width="100px" height="100px"
                                        alt="" onclick="image(this)">
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{ url('movies/') }}/{{ $data->id }}">
                                            <button class="btn btn-success">Edit</button>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection