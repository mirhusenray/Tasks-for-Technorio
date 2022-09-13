@extends('layouts.app')

@section('content')

<div class="container">
<!-- -->
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Add Movie</div>

                <div class="card-body">
                    
                   
                    <form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Release Date</label>
                                    <input type="date" class="form-control" name="release_date" >
                                    @error('release_date')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Movie title">
                                    @error('title')
                                    {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label>Poster</label>
                                    <input type="file" class="form-control" name="poster">
                                    @error('poster')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Description</label><br>
                                    <textarea rows="4" cols="125" name="description"></textarea>
                                    @error('description')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection