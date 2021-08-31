{{-- @extends('layouts.app')

@section('content') --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <title>halaman login</title>
  </head>
  <body>

    <div class="container " style="font-family: Quicksand;">
        <div class="row  justify-content-center">
          
            <div class="col-md-6">
                <div class="card" style="width: 500px;  padding-top:10%; border-radius:70px;  margin-top:20%">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    {{-- <img src="{{ asset('image/netzen.png') }}" alt="" style="width: 50% " class="align-center"> --}}
                    <img src="{{ asset('image/netzen1.png') }}" class="rounded mx-auto d-block mt-2" alt="..."  style="width: 300px; margin-bottom:3%">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                            <div class="col-1">

                            </div>
                                <div class="col-10">

                                    <label  for="email"   class=" col-form-label text-md-right font-weight-bold">{{ __('Email*') }} </label>


                                    {{-- <div class="input-group input-group-lg" > --}}


                                        <input  style="border-radius: 90px; background: #F3F6FF; font-size:15px" id="email" type="email"  placeholder="mail@website.com" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      {{-- </div> --}}






                                </div>


                            {{-- </div> --}}
                        </div>

                            <div class="form-group row">
                                <div class="col-1">

                                </div>
                                <div class="col-10">
                                <label for="password"  class=" col-form-label text-md-right font-weight-bold">{{ __('Password*') }}</label>

                                {{-- <div class="input-group input-group-lg" "> --}}
                                    <input style="border-radius: 90px; background: #F3F6FF; font-size:15px"
                                     id="password" type="password" placeholder="Min. 8 karakter" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                            {{-- </div> --}}

                            {{-- <div class="form-group row">

                                <div class="col-md-10 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div> --}}
                            <br>
                            <div class="form-group row mb-0 mt-3">


                                <div class="col-md-12 offset-md-0">

                                    <button style="border-radius: 90px; background: #04ACEC;
                                    " type="submit" class="btn  btn-block text-white">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <p class="text-left "><a class="btn btn-link" style="font-size: 12px" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a></p>
                                    @endif

                                </div>
                            </div>
                        {{-- </div> --}}
                    </form>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>


{{-- @endsection --}}
