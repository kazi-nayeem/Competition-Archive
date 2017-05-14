<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::whereUserId(Auth::user()->id)->get();
        return view('admin.competitions.index', compact('competitions'));
    }
}
