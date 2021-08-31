<?php

namespace App\Http\Controllers;

use App\Penawaran;
use App\perusahaan;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class FollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $penawaran=Penawaran::with('perusahaan')->get();
        return view('followup.index',['penawarans'=>$penawaran]);
    }

    public function search(Request $request)
    {
        $searchString = $request->search;
        $categories = Penawaran::whereHas('perusahaan', function ($query) use ($searchString){
            $query->where('nama_perusahaan', 'like', '%'.$searchString.'%');
        })
        ->with(['perusahaan' => function($query) use ($searchString){
            $query->where('nama_perusahaan', 'like', '%'.$searchString.'%');
        }])->get();

        return view('followup.index', ['penawarans'=>$categories]);
    }

    
    public function fab()
    {
        return view('followup.fab',compact('penawaran'));
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function menu(){
        return view('followup/menu');
        // return view('followup.menu',['penawaran_id'=>$penawaran_id]);
    }
}