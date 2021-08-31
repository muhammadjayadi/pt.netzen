@extends('layouts.main')
@section('content')
<div class="container">

    <form class="form" method="get" action="{{ route('cari') }}">
        <div class="form-group w-100 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword" value="{{ request()->get('search') }}">
            <button type="submit" class="btn  mb-1" style="background: #C7F2FF;">Cari</button>
        </div>
    </form><br>



<table class="table border border-white">
{{-- <thead >
    <th></th>
    <th></th>
</thead> --}}

    <tbody>
        @foreach ($perusahaans as $perusahaan)

            <tr>
                {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                <td><span style="font-weight: 700">{{ $perusahaan->nama_perusahaan}}</span><br>
                    <span style="font-weight: 300">   {{ $perusahaan->jenis_perusahaan }}</span>

                </td>


                <td>
                    {{-- <a class="badge badge-danger" href="{{ route('cetak_pdf') }}" class="btn btn-primary"
                    target="_blank">Cetak PDF</a>

                        <a href="/penawaran/cetak_pdf/{{ $penawaran->id }}" class="badge badge-info">format pdf</a> --}}
                        {{-- <a href="/detail/{{ $penawaran->perusahaan_id }}" class="btn btn-info btn-sm">Detail</a> --}}
                        <a href="/detail/{{ $perusahaan->id }}" class="btn  btn-sm " style="margin-left: 0px"><i class='bx bxs-user-detail nav__icon'></i></a>

                    {{-- </form> --}}
                </td>
            </tr>
        @endforeach

</table>

</div>

@endsection
