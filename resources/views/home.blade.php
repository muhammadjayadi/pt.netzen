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
                                   <h3 class="fs-2">18</h3>
                                   <p class="fs-5">Account</p>
                               </div>
                               <i class="fas fa-user fs-1 primary-text border rounded-full primary-bg p-3"></i>
                           </div>
                       </div>
   
                       <div class="col-md-4">
                           <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background: #C7F2FF">
                               <div>
                                   <h3 class="fs-2">4920</h3>
                                   <p class="fs-5">Penawaran</p>
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
                           
                           @foreach ($penawarans as $user)
                               <table class="table table-bordered mt-3">
                                   <thead class="thead bg-light text-center">
                                       <tr>
                                           {{-- <th scope="col">No</th>     --}}
                                           <th scope="col">Nama</th>
                                           <th scope="col">Email</th>
                                           <th scope="col">Aksi</th>
                                           {{-- <th scope="col">Aksi</th> --}}
                                       </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                            <td>{{$user->perusahaan->user->name}}</td>
                                            <td>{{$user->perusahaan->user->email}}</td>
                                            <td><button></button></td>
                                        </tr>
                                   </tbody>
                                   
                           @endforeach
                           </div>
                       </div>
                   </div>
</div>
@endsection




