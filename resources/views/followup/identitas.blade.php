@extends('layouts.main')

@section('content')
<div class="contaner">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-3">
            {{-- <h5>{{ $perusahaan }}</h5> --}}
        </div>
        <div class="col-4"></div>
    </div>


    <hr>
    <div class="row">

        <div class="col-3"></div>
    <div class="col-sm-6 ">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

<form method="post" action="{{ route('identitas') }}" enctype="multipart/form-data">
        {{ @csrf_field() }}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Silahkan Upload KTP Direktur</h5>
            <div class="mb-3">
            <input class="form-control form-control-sm "  name="ktp_direktur" type="file">
<br>



                <h5 class="card-title">Silahkan Upload KTP Finance</h5>
                <div class="mb-3">
                <input class="form-control form-control-sm "  name="ktp_finance" type="file">
            </div>
<br>

                    <h5 class="card-title">Silahkan Upload NPWP</h5>
                    <div class="mb-3">
                    <input class="form-control form-control-sm "  name="npwp" type="file">
                </div>
<br>

                        <h5 class="card-title">Silahkan Upload AKTA</h5>
                        <div class="mb-3">
                        <input class="form-control form-control-sm "  name="akta" type="file">
                    </div>
<br>


        <input class="form-control form-control-sm " id="penawaran_id" name="penawaran_id" type="hidden" value="{{ $penawaran_id }}">
        <button  type="submit" name="submit" class="btn  mt-3" style="background:  #C7F2FF"  > Submit</button>
        <a  type="button" href="{{ route('file.create',$penawaran_id) }}" style="background:  #C7F2FF" class="btn  mt-3"> Next</a>
        </div>
    </div>
</form>
    </div>

</div>

</div>
@endsection
