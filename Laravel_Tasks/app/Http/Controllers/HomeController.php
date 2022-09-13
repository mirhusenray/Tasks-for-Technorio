<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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


        $user = Auth::user();
        $favorites = Favorite::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        // dd($favorites);
        $data=compact('movies','favorites');
        return view('home')->with($data);
    }

    public function adminHome()
    {
        $total_movies=Movie::count();
        $total_user=User::where('is_admin',0)->count();
        $total_admin_user=User::where('is_admin',1)->count();
        $total_liked=Favorite::count();
      $data=compact('total_movies','total_user','total_admin_user','total_liked');
        return view('admin-home')->with($data);
    }

    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

}
