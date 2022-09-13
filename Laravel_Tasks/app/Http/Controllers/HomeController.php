<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies=Movie::all();
        $data=compact('movies');
        return view('home')->with($data);
    }

    public function adminHome()
    {
        return view('admin-home');
    }

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
