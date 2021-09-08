<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penawaran;
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

        $users = Penawaran::with('perusahaan')->get(); 
        return view('home',['penawarans'=> $users]);
    }
}