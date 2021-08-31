@extends('layouts.main')




@section('content')
<br>

<div class="container">
    <div class="col-6">

        <a class="btn " style="background: #C7F2FF;
        " type="button" href="">Penawaran Baru</a>
      </div>
      <br>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
{{-- <hr> --}}

@foreach ($penawarans as $penawaran)
            <table class="table table-bordered">
                <thead class="thead bg-light text-center">
                    <tr>
                        {{-- <th scope="col">No</th>     --}}
                        <th scope="col">ID Surat </th>
                        <th scope="col">Link</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Site A</th>
                        <th scope="col">Site B</th>
                        <th scope="col">BW</th>
                        <th scope="col">Kontrak</th>
                        <th scope="col">Monthly BW</th>
                        <th scope="col">OTC</th>
                        {{-- <th scope="col">Aksi</th> --}}
                    </tr>
                    </tr>
                </thead>
                <tbody>

                    {{-- @foreach ($perusahaans as $perusahaan) --}}

                            <tr>
                                {{-- <th scope="row">{{ $loop->iteration }}</th>  --}}
                                <td>{{ $penawaran->created_at}}</td>
                                <td>{{ $penawaran->jenis_koneksi}}</td>
                                <td>{{ $penawaran->lokasi}}</td>
                                <td>{{ $penawaran->site_a}}</td>
                                <td>{{ $penawaran->site_b}}</td>
                                <td>{{ $penawaran->bw}}</td>
                                <td>{{ $penawaran->kontrak}}</td>
                                <td>{{ $penawaran->monthly_bw}}</td>
                                <td>{{ $penawaran->otc}}</td>


                            </tr>
                            <tr>
                                <td  colspan="7"> <a class="btn float-left btn-sm mt-2 ml-3" href="/penawaran/cetak_pdf/{{ $penawaran->id }}"class="btn btn-primary"
                                    target="_blank"><i class='bx bxs-file-pdf ' style='color:#0d0d0d; font-size:20px'  ></i></a>
                                    <a href="/penawaran/pdf/{{ $penawaran->id }}" class="btn btn-info float-left btn-sm mt-2 ml-3">file</a>
                                    <a href="/penawaran/{{ $penawaran->id }}/edit" class="btn  float-left btn-sm mt-2 ml-3"><i class='bx bx-pencil ' style='color:#0d0d0d; font-size:20px'  ></i></a>


                                    <a href="{{ route('file.create', $penawaran->id) }}" class="btn  float-left btn-sm mt-2 ml-3 "><i class='bx bx-mail-send ' style='color:#0d0d0d; font-size:20px'></i></a>

{{--
                                    @if($penawaran->file->type!="PO")
                                    <a href="{{ route('file.create', $penawaran->id) }}" class="btn  float-left btn-sm mt-2 ml-3 "><i class='bx bx-mail-send ' style='color:#0d0d0d; font-size:20px'></i></a>
                                        @else
                                        <a href="{{ route('file.create', $penawaran->id) }}" class="btn  float-left btn-sm mt-2 ml-3 "><i class='bx bx-mail-send ' style='color:#0d0d0d; font-size:20px'></i></a>
                                    @endif --}}


                                    <a href="{{ route('data', $penawaran->id) }}" class="btn  float-left btn-sm mt-2 ml-3 "><i class='bx bx-cloud-download ' style='color:#0d0d0d; font-size:20px'></i></a>
                                    {{-- <a href="{{ route('menu')}}" class="btn btn-success float-left btn-sm mt-2 ">followup</a> --}}

                                </td>
                                <td colspan="2">

                                    @if($penawaran->bw>10)
                                    <i class='bx bxs-circle nav__icon' style='color:#08a031; line-height:60px' > </i>
                                    @else
                                    <i class='bx bxs-circle nav__icon' style='color:red; line-height:60px' > </i>

                                    @endif



@endforeach



        </div>
@endsection
