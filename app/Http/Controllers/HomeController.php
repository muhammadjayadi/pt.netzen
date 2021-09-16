<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penawaran;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
    public function index(){

        $penawaran=Penawaran::all();
        $user=User::all();
        return view('home',['penawarans'=>$penawaran],['users'=>$user]);
    }

    public function create()
    {
        $user = User::all();
        return view('add.create',compact('user'));
    }

    protected function validator(array $data)
    {
        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'role' => $request['role'],
            'no_hp1' => $request['no_hp1'],
            'no_hp2' => $request['no_hp2'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('home')->with('status', 'User Berhasil Ditambahkan');
    }

    public function destroy(User $id)
    {
        $id->delete();
  
        return redirect()->route('home')->with('success','user deleted successfully');
    }
}