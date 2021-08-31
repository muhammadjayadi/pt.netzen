@extends('layouts.main')
@section('content')

<div class="container">
<table class="table table-bordered">
    <thead class="thead bg-light text-center">
        <tr>

            <th scope="col">Surat PO</th>
            <th scope="col">Type</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($files as $file)
        {{-- @foreach ($perusahaans as $perusahaan) --}}
            <tr>
                {{-- <th scope="row">{{ $loop->iteration }}</th>  --}}
                <td>{{ $file->file}}</td>
                <td>{{ $file->type}}</td>
                <td> <a href="{{ route('file.download',$file->id) }}"  type="button" class="btn btn-info">download</a> <td>

                @endforeach
            </tbody>
            </table>

        </div>
</div>

</div>
@endsection
