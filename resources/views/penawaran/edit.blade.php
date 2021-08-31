@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="mt-3">Update Penawaran</h3><br>

        <form method="POST" action="/penawaran/{{ $penawaran->id }}">
            @method('Patch')
            @csrf


                    <div class="row">

                        <div class="form-group center col-2">
                            <label for="jenis_koneksi">Link</label>
                            <select name="jenis_koneksi" id="jenis_koneksi" class="form-control"  >
                                <option value="Fiber Optic">Fiber Optic</option>
                                <option value="Wirles">Wireless</option>
                            </select>
                            </div>


                        <div class="form-group center  col-2">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid
                        @enderror" id="lokasi" placeholder="Input lokasi" name="lokasi" value="{{ $penawaran->lokasi }}" >
                            @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group center  col-1">
                            <label for="site_a">Site A</label>
                            <input type="text" class="form-control @error('site_a') is-invalid
                        @enderror" id="site_a" placeholder="Input site_a" name="site_a" value="{{ $penawaran->site_a }}" >
                            @error('site_a')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group center  col-1">
                            <label for="site_b">Site B</label>
                            <input type="text" class="form-control @error('site_b') is-invalid
                        @enderror" id="site_b" placeholder="Input site_b" name="site_b" value="{{ $penawaran->site_b }}" >
                            @error('site_b')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group center col-1">
                            <label for="bw">BW</label>
                            <select name="bw" id="bw" class="form-control"  @error('bw') is-invalid
                            @enderror"  >
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="1000">1000</option>
                              </select>
                            </div>


                    <div class="form-group center  col-1">
                        <label for="kontrak">Kontrak</label>
                        <input type="text" class="form-control @error('kontrak') is-invalid
                    @enderror" id="kontrak" placeholder="Input kontrak" name="kontrak" value="{{ $penawaran->kontrak }}" >
                        @error('kontrak')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group center  col-2">
                        <label for="monthly_bw">Monthly BW</label>
                        <input type="text" class="form-control @error('monthly_bw') is-invalid
                    @enderror" id="monthly_bw" placeholder="Input monthly_bw" name="monthly_bw" value="{{ $penawaran->monthly_bw }}" >
                        @error('monthly_bw')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group center  col-2">
                        <label for="otc">OTC</label>
                        <input type="text" class="form-control @error('otc') is-invalid
                    @enderror" id="otc" placeholder="Input otc" name="otc" value="{{ $penawaran->otc }}" >
                        @error('otc')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="update center">

                </div>

                <div class="text-center mt-5 ">
                    <button  type="submit" class="btn mt-3" style="background: #04ACEC; color:white; height: 45px;
                    width: 200px;
                    left: 0px;
                    top: 0px;
                    border-radius: 7px;

                    "> Update </button>
                    
             </div>





</form>

</div>

</div>
</div>
</div>










@endsection
