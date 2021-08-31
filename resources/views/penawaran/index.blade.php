@extends('layouts.main')

@section('content')

<div class="container">

    <div class="row">

                    <div class="row ">
                        <div class="col-6">
                            <div class="card " style="background: #9BDEB7;">
                                <div class="card-body">
                    <h5 class="card-title">Tambah Penawaran</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="/penawaran/create" class="btn btn-outline-dark">Buat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="background: #C7F2FF;">
                            <div class="card-body">
                <h5 class="card-title">Follow Up</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ route('penawaran/flowup',Auth::user()->id) }}" class="btn btn-outline-dark">Lihat</a>
                        </div>
                    </div>
                </div>

                </div>


        </div><br>


    </div>

@endsection
