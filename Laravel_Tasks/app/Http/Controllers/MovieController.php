<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $movies=Movie::all();
        $data=compact('movies');
       return view('movie.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'release_date'=>'required',
            'title'=>'required',
            'description'=>'required',
            'poster'=>'required'
          
        ]);
        $movies = new Movie;
        $movies->release_date = $request['release_date'];
        $movies->title = $request['title'];
        $movies->description = $request['description'];
   
        if ($request->file('poster')) {

            $poster = $request->file('poster')->store('Movie', 'uploads');
            $movies->poster = $poster;
        }
        $movies->status =0;
        $movies->save();
        return redirect()->route("movies.index")->with('status','Movie is successfully stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        $url = url('movies') . "/" . $id;
        $method="PUT";
        $data=compact('movies','url','method');
        return view('movie.edit')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $movies = Movie::findOrFail($id);
        $movies->release_date = $request['release_date'];
        $movies->title = $request['title'];
        $movies->description = $request['description'];
   
        if ($request->file('poster')) {

            $poster = $request->file('poster')->store('Movie', 'uploads');
            $movies->poster = $poster;
        }
        $movies->status =$request['status'];
        $movies->save();
        return redirect()->route("movies.index")->with('status','Movie is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
