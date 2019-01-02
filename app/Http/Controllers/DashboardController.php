<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_no=auth()->user()->student_no;
        $user=DB::select('SELECT * from posts where student_no='.$student_no);
        // return view('dashboard')->with('posts',$user->posts);
        return view('dashboard')->with('posts',$user);
    }
}
