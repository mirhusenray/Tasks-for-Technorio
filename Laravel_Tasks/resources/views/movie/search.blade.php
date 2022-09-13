@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- -->
        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">search movies</div>

                    <div class="card-body">


                        <form action="{{ route('movie.search') }}" method="POST">

                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>from date</label>
                                        <input type="date" class="form-control" name="from_date">

                                    </div>
                                    <div class="form-group col-6">
                                        <label>to date </label>
                                        <input type="date" class="form-control" name="to_date" placeholder="Movie title">

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
                        </form>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">search movies</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Release Date</th>

                                <th scope="col">Poster</th>
                       
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($movie_search as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key++ }}</th>
                                    <td>{{ $data->movie->title }}</td>
                                    <td>{{ $data->movie->description }}</td>
                                    <td>{{ $data->movie->release_date }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/' . $data->movie->poster) }}" width="100px" height="100px"
                                            alt="" onclick="image(this)">
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
