<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

$penawaran=Penawaran::with('perusahaan')->get();
// echo $penawaran;
return view('home',['penawarans'=>$penawaran]);
        // return view('home');


}
}