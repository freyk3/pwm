<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent;

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
        return view('home');
    }
    public function myaccount()
    {
        //dd(Auth::user()->id);
        $view['user'] = Auth::user();
        $instruments = User::find(Auth::user()->id)->instruments;
        $view['instruments'] = $instruments;
        //dd($instruments);

        return view('myaccount', $view);
    }
}
