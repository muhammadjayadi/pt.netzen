<?php

namespace App\Http\Controllers;

use App\Identitas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
// use PDF;

class IdentitasController extends Controller
{
    public function create($penawaran_id){
        return view('followup.identitas',['penawaran_id'=>$penawaran_id]);
        // return view('followup.identitas');
    }

    public function store(Request $request){

        $this->validate($request, [
            'ktp_direktur' => 'required|mimes:pdf,xlx,csv|max:2048',
            'ktp_finance' => 'required|mimes:pdf,xlx,csv|max:2048',
            'npwp'=>'required|mimes:pdf,xlx,csv|max:2048',
            'akta'=>'required|mimes:pdf,xlx,csv|max:2048',
            'penawaran_id'=>'required'

        ]);

	// menyimpan data file yang diupload ke variabel $file
    $ktp_direktur = $request->file('ktp_direktur');
    $ktp_finance = $request->file('ktp_finance');
    $npwp = $request->file('npwp');
    $akta = $request->file('akta');

    $file1 = time()."_".$ktp_direktur->getClientOriginalName();
    $file2 = time()."_".$ktp_finance->getClientOriginalName();
    $file3 = time()."_".$npwp->getClientOriginalName();
    $file4 = time()."_".$akta->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'identitas';


    $ktp_direktur->move($tujuan_upload,$file1);
    $ktp_finance->move($tujuan_upload,$file2);
    $npwp->move($tujuan_upload,$file3);
    $akta->move($tujuan_upload,$file4);





		Identitas::create([
			'ktp_direktur' => $file1,
			'ktp_finance' => $file2,
            'npwp' => $file3,
            'akta' => $file4,
            'penawaran_id'=>$request->penawaran_id
		]);





		// return redirect(route('upload'));
        return redirect()->back()->with('status', 'Data Barang Berhasil upload');




    }

}