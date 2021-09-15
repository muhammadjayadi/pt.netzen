@extends('layouts.main')
<link rel="stylesheet" href="{{asset('assets/css/model.css')}}" />


@section('content')
    <div class="container">
        <br>
        <div class="row">
            <main>
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-4">
                            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background: #9BDEB7">
                                <div>
                                    <h3 class="fs-2">{{ $users->count() }}</h3>
                                    <p class="fs-5">Account</p>
                                </div>
                                <i class="fas fa-user fs-1 primary-text border rounded-full primary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background: #C7F2FF">
                                <div>
                                    <h3 class="fs-2">{{ $penawarans }}</h3>
                                    <p class="fs-5">Jumlah Penawaran</p>
                                </div>
                                <i
                                    class="fas fa-paper-plane fs-1 primary-text border rounded-full primary-bg p-3"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-6">


                            <a class="btn " style="background: #C7F2FF" type="button" href="{{route('register')}}">
                                Tambah User
                                <i class="fas fa-user-plus"></i>
                            </a>

                         

                        </div>
                            <br><br>

                                @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            {{-- <hr> --}}



                                <table class="table table-bordered mt-3">
                                    <thead class="thead bg-light text-center">
                                        <tr>

                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                    <tbody>
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>aksi</td>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                    </table>

                            </div>
                        </div>
                    </div>
    </div>
@endsection




