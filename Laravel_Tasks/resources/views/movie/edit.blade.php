@extends('layouts.app')

@section('content')

<div class="container">
    <!-- -->
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Add Movie</div>

                <div class="card-body">


                    <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($method)
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Release Date</label>
                                    <input type="date" class="form-control" name="release_date"
                                        value="{{$movies->release_date}}">

                                </div>
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$movies->title}}"
                                        placeholder="Movie title">

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Poster</label>
                                    <input type="file" class="form-control" name="poster" value="{{$movies->poster}}">

                                    <img src="{{ asset('uploads/' . $movies->poster) }}" width="100px" height="100px"
                                        alt="" onclick="image(this)">
                                </div>
                                <div class="form-group col-4">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option hidden>Select Movies status</option>
                                        <option value="1">Published</option>
                                        <option value="0">Un-Published</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Description</label><br>
                                    <textarea rows="4" cols="125" name="description">{{$movies->description}}</textarea>

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