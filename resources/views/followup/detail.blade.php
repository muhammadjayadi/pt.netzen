@extends('layouts.main')


@section('content')
{{-- <h1>{{ $penawaran->perusahaan->nama_perusahaan }}</h1> --}}
<div class="container">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-3">






        </div>
        <div class="col-4"></div>
    </div>


    {{-- <hr> --}}
    <div class="p" style="background: #C7F2FF;">

        {{-- <p class="text-center">Penawaran Anda sudah terkirim  <span style="font-weight: 600;"></span></p> --}}
    </div><br>

    {{-- steper --}}
    <div class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
            <!-- your steps here -->
            @if(!in_array("PO", $listUploaded) )
            <div class="step" data-target="#logins-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                    <span class="bs-stepper-circle bg-dark">PO</span>
                    <span class="bs-stepper-label">PO</span>
                </button>
            </div>
            @else
            <div class="step" data-target="#logins-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                    <span class="bs-stepper-circle bg-warning">PO</span>
                    <span class="bs-stepper-label">PO</span>
                </button>
            </div>
            @endif


            @if(!in_array("FAB", $listUploaded))
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-dark">FAB</span>
                    <span class="bs-stepper-label">FAB</span>
                </button>
            </div>
            @else
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-warning">FAB</span>
                    <span class="bs-stepper-label">FAB</span>
                </button>
            </div>
            @endif
            @if(!in_array("PKS", $listUploaded))
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-dark">PKS</span>
                    <span class="bs-stepper-label">PKS</span>
                </button>
            </div>
            @else
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-warning">PKS</span>
                    <span class="bs-stepper-label">PKS</span>
                </button>
            </div>
            @endif

            @if(!in_array("AOS", $listUploaded))
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-dark">AOS</span>
                    <span class="bs-stepper-label">AOS</span>
                </button>
            </div>
            @else
            <div class="line"></div>
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle bg-warning">AOS</span>
                    <span class="bs-stepper-label">AOS</span>
                </button>
            </div>
            @endif
    </div>

    <div class="row">

        <div class="col-3">

        </div>

    <div class="col-sm-6 ">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

        @endif

        @if(!in_array("PO", $listUploaded) )
        <form method="post" action="{{ route('file') }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Silahkan Upload File PO.</h5>
                <div class="mb-3">
                <input class="form-control form-control-sm "  name="data" type="file">
            </div>


        <input class="form-control form-control-sm " name="type" type="hidden" value="PO">
        {{-- @foreach ($files as $file) --}}
                <input class="form-control form-control-sm " id="penawran_id" name="penawaran_id" type="hidden" value="{{ $penawaran_id }}">
                {{-- <input class="form-control form-control-sm " name="kontrak" type="text" value="{{ $file->penawaran->bw   }}"> --}}
                {{-- @endforeach --}}
                <button  type="submit" name="submit" style="background: #C7F2FF;"  class="btn  mt-3 "> Upload</button>
                {{-- <a  type="button"  href="{{ route('identitas.create',$penawaran_id) }}" style="background: #C7F2FF;" class="btn  mt-3 "> Next</a> --}}


                {{-- <a href="{{ route('file.create', $penawaran->id) }}" class="btn btn-warning float-left btn-sm ml-1 ">detail</a> --}}
                </div>
            </div>
        </form>

    </div>

</div>
@else



        @if(!in_array("FAB", $listUploaded) )
        <form method="post" action="{{ route('file') }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Silahkan Upload File FAB.</h5>
                <div class="mb-3">
                <input class="form-control form-control-sm "  name="data" type="file">
            </div>


        <input class="form-control form-control-sm " name="type" type="hidden" value="FAB">
        {{-- @foreach ($files as $file) --}}
                <input class="form-control form-control-sm " id="penawran_id" name="penawaran_id" type="hidden" value="{{ $penawaran_id }}">
                {{-- <input class="form-control form-control-sm " name="kontrak" type="text" value="{{ $file->penawaran->bw   }}"> --}}
                {{-- @endforeach --}}
                <a href="{{ route('upload') }}" type="submit" name="submit" style="background: white;  margin-left: 5px"  class="btn border-dark mt-3 "> Buat FAB</a>

                <a  type="button"  href="{{ route('identitas.create',$penawaran_id) }}" style="background: #C7F2FF; margin-left: 5px" class="btn  mt-3 "> Upload Identitas</a>
                <button  type="submit" name="submit" style="background: #C7F2FF;"  class="btn  mt-3 "> Upload FAB</button>


                {{-- <a href="{{ route('file.create', $penawaran->id) }}" class="btn btn-warning float-left btn-sm ml-1 ">detail</a> --}}
                </div>
            </div>
        </form>

       @else

        @if(!in_array("PKS", $listUploaded) )


        <form method="post" action="{{ route('file') }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Silahkan Upload File PKS.</h5>
                <div class="mb-3">
                <input class="form-control form-control-sm "  name="data" type="file">
            </div>


        <input class="form-control form-control-sm " name="type" type="hidden" value="PKS">
        {{-- @foreach ($files as $file) --}}
                <input class="form-control form-control-sm " id="penawran_id" name="penawaran_id" type="hidden" value="{{ $penawaran_id }}">
                {{-- <input class="form-control form-control-sm " name="kontrak" type="text" value="{{ $file->penawaran->bw   }}"> --}}
                {{-- @endforeach --}}
                <button  type="submit" name="submit" style="background: #C7F2FF;"  class="btn  mt-3 "> Upload</button>
                {{-- <a  type="button"  href="{{ route('identitas.create',$penawaran_id) }}" style="background: #C7F2FF;" class="btn  mt-3 "> Next</a> --}}


                {{-- <a href="{{ route('file.create', $penawaran->id) }}" class="btn btn-warning float-left btn-sm ml-1 ">detail</a> --}}
                </div>
            </div>
        </form>

        @else

        @if(!in_array("AOS", $listUploaded) )
        <form method="post" action="{{ route('file') }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Silahkan Upload File AOS.</h5>
                <div class="mb-3">
                <input class="form-control form-control-sm "  name="data" type="file">
            </div>


        <input class="form-control form-control-sm " name="type" type="hidden" value="AOS">
        {{-- @foreach ($files as $file) --}}
                <input class="form-control form-control-sm " id="penawran_id" name="penawaran_id" type="hidden" value="{{ $penawaran_id }}">
                {{-- <input class="form-control form-control-sm " name="kontrak" type="text" value="{{ $file->penawaran->bw   }}"> --}}
                {{-- @endforeach --}}
                <button  type="submit" name="submit" style="background: #C7F2FF;"  class="btn  mt-3 "> Upload</button>
                {{-- <a  type="button"  href="{{ route('identitas.create',$penawaran_id) }}" style="background: #C7F2FF;" class="btn  mt-3 "> Next</a> --}}


                {{-- <a href="{{ route('file.create', $penawaran->id) }}" class="btn btn-warning float-left btn-sm ml-1 ">detail</a> --}}
                </div>
            </div>
        </form>
        @else
        <p>proses ini sudah selesai</p>

        @endif
        @endif
        @endif
        @endif


{{-- <br><br>
<div class="text-center ">

    <a href="{{ route('upload') }}" type="button"style="background: #C7F2FF;" class="btn  btn-lg ">Buat FAB</a>
    <a href="" type="button" style="background: #C7F2FF;" class="btn  btn-lg ">Buat PKS</a>

    <a href="" type="button" style="background: #C7F2FF;" class="btn  btn-lg ">Buat AOS</a>
</div> --}}

    </div>


@endsection
