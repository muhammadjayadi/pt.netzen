<?php

namespace App\Http\Controllers;

use App\Penawaran;
use App\perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {



$data = DB::table('perusahaans')
->select('perusahaans.id','perusahaans.nama_perusahaan','perusahaans.jenis_perusahaan','perusahaans.kontak','perusahaans.user_id')
->join('users', 'perusahaans.user_id', '=', 'users.id')
->where('perusahaans.user_id', '=', $user->id)
->get();
// dd($data);

        // return view('penawaran.detail', ['penawarans'=>$data]);

        // $perusahaan=perusahaan::with('user')->get();
        return view('penawaran.followup',['perusahaans'=>$data, 'user_id'=>$user] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('penawaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $data = perusahaan::insertGetid([
    //         'nama_perusahaan' => $request->get('nama_perusahaan'),
    //         'jenis_perusahaan' => $request->get('jenis_perusahaan'),
    //         'kontak' => $request->get('kontak')

    //     ]);
    //     perusahaan::findOrfail($data)->penawaran()->saveMany([
    //         new Penawaran([
    //             'tanggal'=>$request->get('tanggal'),
    //             'site'=>$request->get('site'),
    //             'coordinate'=>$request->get('coordinate'),
    //             'bw'=>$request->get('bw'),
    //             'kontrak'=>$request->get('kontrak'),
    //             'monthly_bw'=>$request->get('monthly_bw'),
    //             'otc'=>$request->get('otc')

    //     ])
    // ]);
    //     return redirect('/penawaran/index')->with('status', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(perusahaan $perusahaan)
    {
        return view('penawaran.detail', compact('perusahaan'));
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
}