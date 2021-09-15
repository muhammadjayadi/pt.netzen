@extends('layouts.main')
@section('content')

<div class="container" >
    <h3>File Surat</h3>
    <table class="table table-bordered">
        <thead class="thead bg-light text-center">
            <tr>

                <th scope="col">Surat</th>
                <th scope="col">Type</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach ($files as $file)
        <tbody>

            {{-- @foreach ($perusahaans as $perusahaan) --}}
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th>  --}}
                    <td>{{ $file->file}}</td>
                    <td>{{ $file->type}}</td>
                    <td> <a href="{{ route('file.download',$file->id) }}"  type="button" class="btn btn-info">download</a> <td>


                </tbody>
                @endforeach
                </table>
                <br>
<h3>File Identitas</h3>
                <table class="table table-bordered">
                    <thead class="thead bg-light text-center">
                        <tr>

                            <th scope="col">KTP Diretktur</th>
                            <th scope="col">KTP Finance</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">Akta</th>
                            {{-- <th scope="col">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($identitas as $identitas)
                        {{-- @foreach ($perusahaans as $perusahaan) --}}
                            <tr>
                                {{-- <th scope="row">{{ $loop->iteration }}</th>  --}}
                                <td><a href="{{ route('identitas.download',$identitas->id) }}"  type="button" class="btn btn-info">download ktp direktur</a></td>
                                <td><a href="{{ route('identitas.download',$identitas->id) }}"  type="button" class="btn btn-info">download KTP Finance</a></td>
                                <td><a href="{{ route('identitas.download',$identitas->id) }}"  type="button" class="btn btn-info">download NPWP</a></td>
                                <td><a href="{{ route('identitas.download',$identitas->id) }}"  type="button" class="btn btn-info">download AKTA</a></td>
                                {{-- <td> <a href="{{ route('identitas.download',$identitas->id) }}"  type="button" class="btn btn-info">download</a> <td> --}}

                                @endforeach
                            </tbody>
                            </table>

</div>


@endsection
