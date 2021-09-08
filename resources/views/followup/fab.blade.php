<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>form fab</title>
  </head>
  <body>


<div class="container">
    <br>



    <form action="{{ route('download') }}">

            <div class="row ml-2">
                <div class="col-3">
                    <label for="tanggal" class="form-label">Tanggal Penandatanganan Kontrak</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="fab" class="form-label">Nomor FAB</label>
                    <input type="fab" class="form-control" id="fab" value="">
                </div>
            </div>





        <br>
        <div class=""style="background:  #C7F2FF">
            <p class="  ml-2 p-2">Jenis Pekerjaan</p>
        </div>


        <div class="row ml-2">

                <div class="form-group  col-3">
                    <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                    <select name="jenis_pekerjaan" id="jenis_pekerjaan" class="form-control"  >
                        <option value="">Pilih </option>

                        <option value="10">Instalasi Baru</option>
                        <option value="50">Perbarui FAB</option>

                    </select>
                    </div>

            <div class="col-3"></div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Nomor FAB Sebelumnya</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>



        <br>
        <div class="" style="background:  #C7F2FF">
            <p class=" ml-2 p-2">Penanggung jawab</p>
        </div>

        <div class="row ml-2">
            <div class="col-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="nama" value="">
            </div>
            <div class="col-3">
                <label for="tanggal_lahir" class="form-label">Tempat tanggal Lahir</label>
                <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Jabatan</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <div class="row ml-2">

            <div class="form-group col-3">
                <label for="nomor_identitas">Nomor Identitas</label>
                <select name="nomor_identitas" id="nomor_identitas" class="form-control"  >
                    <option value="KTP">KTP</option>
                    <option value="KK">KK</option>

                  </select>
                </div>
            <div class="col-3">
                <label for="no_identitas" class="form-label">Nomor Kartu Identitas</label>
                <input type="no_identitas" class="form-control" id="no_identitas" value="">
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="telepon" class="form-control" id="telepon" value="">
            </div>
            <div class="col-3">
                <label for="mobile_phone" class="form-label">Mobile Phone</label>
                <input type="mobile_phone" class="form-control" id="mobile_phone" value="">
            </div>
        </div>



        <br>
        <div class="" style="background:  #C7F2FF">
            <p class=" ml-2 p-2">Informasi Perusahaan</p>
        </div>

        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>


        <br>
        <div class="" style="background:  #C7F2FF">
            <p class=" ml-2 p-2">Penanggung Jawab Teknisi</p>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>


        <br>
        <div class="row ml-2">
            <div class="col-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

        </div>







        {{-- <br><button type="download" class="btn btn-primary">Download</button> --}}
      </form>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
