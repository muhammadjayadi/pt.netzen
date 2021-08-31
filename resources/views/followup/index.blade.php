@extends('layouts.main')

@section('content')
{{-- <div class="container"> --}}
    <br>
    <h2>Tabel Penawaran</h2>

    <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword" value="{{ request()->get('search') }}">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>


    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table class="table">

        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Perusahaan</th>
                <th scope="col">Status</th>
                <th scope="col">Lokasi</th>
                <th scope="col">id penawaran</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($penawarans as $penawaran)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $penawaran->perusahaan['nama_perusahaan']}}</td>
                    <td>status</td>
                    <td>{{ $penawaran['lokasi']}}</td>
                    <td>{{ $penawaran->created_at->format('dmyhis') }}</td>

                    <td>

                        <a href="{{ route('file.create', $penawaran->id) }}" class="btn btn-warning float-left btn-sm ml-1 ">detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
