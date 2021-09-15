@extends('layouts.main')

@section('content')

<div class="container" style="font-family: 'Quicksand', sans-serif; font-family: 'Roboto', sans-serif;">
    <div class="row ">

        <div class="col-6">
            <h3 class="mt-3">Penawaran Baru</h3>

            <p style="font-weight: 300; font-size:12px">Silahkan mengeisi form untuk membuat surat penawaran baru. pastikan anda mengisi form ini  sesuai dengan data yang sudah disiapkan, lakukan perubahan jika diperlukan</p>
            <br>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            {{-- <div class="container mt-3" style="font-weight: 500">
                <p>Logo Perusahaan</p>
                <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="">
                    </div>


                </div>
            </div> --}}
        </div>
            {{-- <p> <a href="{{ route('penawaran/index') }}"><i class='bx bx-arrow-back' style='color:#3c3c3c'  ></i></a>Tambah Penawaran</p> --}}



        <form method="POST" action="{{ route('penawaran') }}" style="font-size: 15px">
                @csrf

<div class="row">
    <div  class="col-4 form-group" >
        <label for="nama_perusahaan" style="font-weight: 500" >Nama Perusahaan</label>
        <input type="text" class="form-control @error('nama_perusahaan') is-invalid
    @enderror" id="nama_perusahaan"  name="nama_perusahaan" value="{{ old('nama_perusahaan') }}">
        @error('nama_perusahaan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
<div class="col-3">

</div>

{{-- <div class="col-4">
    <div class="container mt-3" style="font-weight: 500">
        <p>Logo Perusahaan</p>
        <div class="picture-container">
            <div class="picture">
                <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                <input type="file" name="logo" id="wizard-picture" class="">
            </div>


        </div>
    </div>

</div> --}}

<div class="row mt-3">
    <div class=" col-2 form-group">
        <label for="jenis_perusahaan" style="font-weight: 500">Jenis Perusahaan</label>
        <input type="text" class="form-control @error('jenis_perusahaan') is-invalid
    @enderror" id="jenis_perusahaan"  name="jenis_perusahaan" value="{{ old('jenis_perusahaan') }}" >
        @error('jenis_perusahaan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class=" col-2 form-group">
        <label for="kontak" style="font-weight: 500">Kontak</label>
        <input type="text" class="form-control @error('kontak') is-invalid
    @enderror" id="kontak"  name="kontak" value="{{ old('kontak') }}">
        @error('kontak')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>


<input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">



                    <div class="row mt-4">
                <p style="font-weight: 700">Site Details</p>
                        <div class="form-group  center col-2">
                            <label for="jenis_koneksi">Link</label>
                            <select name="jenis_koneksi" id="jenis_koneksi" class="form-control"  >
                            <option value="">Pilih Koneksi</option>
                                <option value="Fiber Optic">Fiber Optic</option>
                                <option value="Wirles">Wireless</option>
                            </select>
                            </div>


                        <div class="form-group  center  col-2">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid
                        @enderror" id="lokasi"  name="lokasi" value="{{ old('lokasi') }}" >
                            @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group center  col-1">
                            <label for="site_a">Site A</label>
                            <input type="text" class="form-control @error('site_a') is-invalid
                        @enderror" id="site_a"  name="site_a" value="{{ old('site_a') }}" >
                            @error('site_a')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group  center  col-1">
                            <label for="site_b">Site B</label>
                            <input type="text" class="form-control @error('site_b') is-invalid
                        @enderror" id="site_b"  name="site_b" value="{{ old('site_b') }}" >
                            @error('site_b')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- <div class="form-group  center  col-1">
                            <label for="bw">BW</label>
                            <input type="text" class="form-control @error('bw') is-invalid
                        @enderror" id="bw"  name="bw" value="{{ old('bw') }}" >
                            @error('bw')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group  center col-1">
                            <label for="bw">BW</label>
                            <select name="bw" id="bw" class="form-control"  >
                            <option value=""></option>
                                <option value="10">10 Mbps</option>
                                <option value="20">20 Mbps</option>
                                <option value="30">30 Mbps</option>
                                <option value="1000">1 Gbps</option>
                              </select>
                            </div> --}}

                            <div class="form-group center  col-1">
                                <label for="bw">BW</label>
                                <input type="text" class="form-control @error('bw') is-invalid
                            @enderror" id="bw"  name="bw" value="{{ old('bw') }}" >
                                @error('bw')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                    <div class="form-group center  col-1">
                        <label for="kontrak">Kontrak</label>
                        <input type="text" class="form-control @error('kontrak') is-invalid
                    @enderror" id="kontrak"  name="kontrak" value="{{ old('kontrak') }}" >
                        @error('kontrak')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group  center  col-2">
                        <label for="monthly_bw">Monthly BW</label>
                        <input type="text" class="form-control @error('monthly_bw') is-invalid
                    @enderror" id="monthly_bw"  name="monthly_bw" value="{{ old('monthly_bw') }}" >
                        @error('monthly_bw')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group  center  col-2">
                        <label for="otc">OTC</label>
                        <input type="text" class="form-control @error('otc') is-invalid
                    @enderror" id="otc"  name="otc" value="{{ old('otc') }}" >
                        @error('otc')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>




                </div>

                <div class="text-center mt-5 ">
                    <button  type="submit" class="btn mt-3" style="background: #04ACEC; color:white; height: 45px;
                    width: 200px;
                    left: 0px;
                    top: 0px;
                    border-radius: 7px;

                    "> Generate </button>
             </div>


</form>



</div>
</div>
</div>










@endsection
