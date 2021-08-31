<?php

namespace App\Http\Controllers;

use App\File;
use App\Penawaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Document;
use PhpParser\Node\Stmt\Echo_;

use function GuzzleHttp\Promise\all;
use function PHPSTORM_META\type;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=File::all();
        // return view('penawaran.file',['files'=>$data]);

        $data=File::with('penawaran')->get();
        return view('followup.detail',['files'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {
        // return view('followup.detail');
        $data=File::with('penawaran')->get();
        $data2=Penawaran::with('file')->get();
        return view('followup.detail',['files'=>$data, 'penawarans'=>$data2]);


        // return view('followup.detail',['penawaran_id'=>$penawaran_id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $this->validate($request, [
            'data' => 'required|mimes:pdf,xlx,csv|max:2048',
            'type' => 'required',
            'penawaran_id'=>'required'

        ]);

	// menyimpan data file yang diupload ke variabel $file
    $file = $request->file('data');

    $nama_file = time()."_".$file->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'file';
    $file->move($tujuan_upload,$nama_file);

		File::create([
			'file' => $nama_file,
			'type' => $request->type,
            'penawaran_id'=>$request->penawaran_id
		]);


        return redirect()->back()->with('status', 'Data Barang Berhasil upload');

	}





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penawaran $penawaran)
    {


                $data = DB::table('files')
        ->select('files.id','files.file','files.type')
        ->join('penawarans', 'files.penawaran_id', '=', 'penawarans.id')
        ->where('files.penawaran_id', '=', $penawaran->id)
        ->get();

        // dd($data);
        return view('penawaran.file', ['files'=>$data]);
    }

    public function getFile(penawaran  $penawaran){

        // $data1=File::with('penawaran')->get();

        $data = DB::table('files')
        ->select('files.id','files.file','files.type','files.penawaran_id')
        ->join('penawarans', 'files.penawaran_id', '=', 'penawarans.id')
        ->where('files.penawaran_id', '=', $penawaran->id)
        ->get();

        $listUploaded=[];
        foreach ($data as $d) {
            array_push($listUploaded, $d->type);
        }

        // dd($data);
        // echo "ini data :",$listUploaded;

        return view('followup.detail', ['listUploaded'=>$listUploaded, 'penawaran_id'=>$penawaran->id ])->with('status', 'Data Berhasil upload');
        // return json_encode($listUploaded) ;


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function download($id)
    {

        $file = File::find($id);
        $download = public_path().'/file/' . $file->file;
        return response()->download($download);

    }



    // public function download($id)
    // {

    //     $file = File::find($id);
    //     $download = public_path().'/file/' . $file->file;
    //     return response()->download($download);

    // }

    public function edit(File $file)
    {


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        // $request->file('po')->store('files');
        // return redirect('followup/detail');



        // File::where('id', $file->id)
        // ->update([
        //             'file'=>$request->file('file')->store('file'),
        //             'type'=>$request->get('type')


        // ]);

        // return redirect('followup/detail');





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