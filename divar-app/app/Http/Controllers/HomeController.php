<?php

namespace App\Http\Controllers;
use App\Models\ad;
use App\Models\User;
use App\Models\category;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function index(Request $request)
    {
        $online = Auth::user()->status;
        $users=DB::table('users')->paginate(10);  
            
        
        return view('home',compact('online','users'));
    }
}
