<?php

namespace App\Http\Controllers;

use App\Penawaran;
use App\perusahaan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $penawaran=perusahaan::all();
        $penawaran=perusahaan::with('user')->get();
        return view('penawaran.index',['perusahaans'=>$penawaran]);
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

        return view('penawaran.index', ['penawarans'=>$categories]);
    }

    public function pdf(Penawaran $penawaran, perusahaan $perusahaan)
    {
        // return view('penawaran.penawaran_pdf',['penawarans'=>$penawaran]);
        // $penawaran=Penawaran::with('perusahaan')->get();
        return view('penawaran.penawaran_pdf',compact('penawaran','perusahaan'));
        // return view('penawaran.penawaran_pdf',['penawaran']);
        // return
        // $pdf=PDF::loadView('penawaran.penawaran_pdf',compact('penawaran'));
        // return $pdf->download('penawaran_pdf.pdf');


    }
    public function cetak_pdf(Penawaran $penawaran)
    {

        // $penawaran=Penawaran::with('perusahaan')->get();
        $pdf= PDF::loadview('penawaran.penawaran_pdf', compact('penawaran'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4','potrait');
        return $pdf->download('data_penawaran-pdf.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $getData=Penawaran::with('users')->get();
        return view('penawaran.create');
        // echo $getData;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



    $data=perusahaan::insertGetId([
        'nama_perusahaan' => $request->get('nama_perusahaan'),
        'jenis_perusahaan' => $request->get('jenis_perusahaan'),
        'kontak' => $request->get('kontak'),
        'user_id' => $request->get('user_id')
        // 'logo'=> $request->file->hashName()


    ]);


    perusahaan::findOrfail($data)
    ->penawaran()->saveMany([
        new Penawaran([
            'jenis_koneksi'=>$request->get('jenis_koneksi'),
            'lokasi'=>$request->get('lokasi'),
            'site_a'=>$request->get('site_a'),
            'site_b'=>$request->get('site_b'),
            'bw'=>$request->get('bw'),
            'kontrak'=>$request->get('kontrak'),
            'monthly_bw'=>$request->get('monthly_bw'),
            'otc'=>$request->get('otc'),



    ])
]);

    return redirect('/penawaran/index')->with('status', 'Data Barang Berhasil Ditambahkan');


    }

public function createPenawaran(){

    $getData=Penawaran::with('perusahaan')->get();
    return view('penawaran.tambah_penawaran',['penawarans'=>$getData]);
}

public function tambahPenawaran(request $request){

    $request->validate([
        'jenis_koneksi' => 'required',
        'lokasi' => 'required',
        'site_a' => 'required',
        'site_b' => 'required',
        'bw' => 'required',
        'kontrak' => 'required',
        'monthly_bw' => 'required',
        'otc' => 'required',
        'perusahaan_id' => 'required'


    ]);

    Penawaran::create($request->all());
    return redirect(route('detail'))->with('status', 'Penawaran berhasil ditambahkan');


}


    /**
     * Display the specified resource.
     *
     * @param   \App\Penawaran  $penawaran
     * @return \Illuminate\Http\Response
     */
    public function show(perusahaan $penawaran)
    {
        // $penawaran=Penawaran::with('perusahaan')->get();
        // return view('penawaran.show',['penawarans'=>$penawaran]);

        // Select * from penawarans where perusahaan_id=6;


$data = DB::table('penawarans')
->select('penawarans.id','penawarans.jenis_koneksi','penawarans.created_at' ,'penawarans.lokasi' ,'penawarans.site_a','penawarans.site_b','penawarans.bw','penawarans.kontrak','penawarans.monthly_bw','penawarans.otc')
->join('perusahaans', 'penawarans.perusahaan_id', '=', 'perusahaans.id')
// ->join('files', 'penawarans.id','=','files.id')
->where('penawarans.perusahaan_id', '=', $penawaran->id)
->get();
// dd($data);

// $perusahaan=perusahaan::with('penawaran')->get();
// return view('penawaran.detail',['perusahaans'=>$perusahaan]);
// dd($perusahaan);
        return view('penawaran.detail', ['penawarans'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penawaran $penawaran)
    {
        return view('penawaran.edit', compact('penawaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penawaran $penawaran)
    {
        Penawaran::where('id', $penawaran->id)
        ->update([
                    'jenis_koneksi'=>$request->get('jenis_koneksi'),
                    'lokasi'=>$request->get('lokasi'),
                    'site_a'=>$request->get('site_a'),
                    'site_b'=>$request->get('site_b'),
                    'bw'=>$request->get('bw'),
                    'kontrak'=>$request->get('kontrak'),
                    'monthly_bw'=>$request->get('monthly_bw'),
                    'otc'=>$request->get('otc')
        ]);

    return redirect('penawaran/index#nav-status')->with('status', 'Data Barang Berhasil diubah');

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

    public function fab(Penawaran $penawaran){

            // $penawaran= Penawaran::all();
            return view('followup.fab',compact('penawaran'));
    }

}