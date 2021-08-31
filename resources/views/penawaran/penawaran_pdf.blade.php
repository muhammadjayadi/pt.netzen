<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>penawaran</title>
<style>
    .container{
        font-size: 10px;
    }
    /* table{
        border: 2px;
    } */
</style>
</head>

<body>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="container p-5">
            <div class="row">
                <div class="col-5">
                    <p> Kepada Yth. <br>
                        Bapak/Ibu Pimpinan Instansi/Perusahaan <br>
                        Di Tempat</p> <br>
                </div>
                <div class="col-4"></div>
                <div class="col-2">
                    <img style="width: 150px" src="{{ asset('image/netzen1.png') }}" alt="">
                </div>
            </div>

            <p class="fw-bold"> Hal : Penawaran Pengadaan Layanan Akses Internet</p>
            <p>Dengan Hormat <br>
            Kami dari PT.Netzen Media Akses Bermaksud menyampaikan penawaran harga dengan perincian sebagai berikut :</p>
            <p class="text-center fw-bold">Internet Detected Fiber Optik</p>
            <table class="table table-bordered " border="=1">
            <thead class="thead bg-light text-center">
                <tr>

                    <th scope="col">Jenis Koneksi</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Site A</th>
                    <th scope="col">Site B</th>
                    <th scope="col">BW</th>
                    <th scope="col">Kontrak</th>
                    <th scope="col">Monthly BW</th>
                    <th scope="col">OTC</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($penawaran as $penawaran) --}}


                    <tr>

                        <td>{{$penawaran['jenis_koneksi']}}</td>
                        <td>{{ $penawaran->lokasi}}</td>
                        <td>{{ $penawaran->site_a}}</td>
                        <td>{{ $penawaran->site_b}}</td>
                        <td>{{ $penawaran->bw}}</td>
                        <td>{{ $penawaran->kontrak}}</td>
                        <td>{{ $penawaran->monthly_bw}}</td>
                        <td>{{ $penawaran->otc}}</td>

                    </tr>


                {{-- @endforeach --}}

        </table>
        <p>Terms of Service <br>
        1. Harga diatas belum termasuk ppn 10% <br>
        2. DP 50% maksimal 3 har setelah Approval dan Coontract <br>
        3. Pelunasan 50% setelah pekerjaan selesai </p><br>

        <p>Demikian proposal ini kami sampaikan, atas perhatiannya serta kerjasamanya kami ucapkan banyak terimakasih. <br>
            Apabila ada hal yang kurang dimengerti Bapak/Ibu dapat menghubungi HOTLINE atau e-mail kami: </p>


            <br><br>
            <div class="row">

                <div class="col-4 ml-3">
                <p>
                    Acoount Manager  <br>
                    Phone   : +62 8533 789 5559 / +62 877 6006 9009 <br>
                    E-mail  : jonata.purba@netzen.net.id <br>
                    Website : www.netzen.net.id</p>
                </div>
                <div class="col-5"></div>
                <div class="col-3" style="text-align: center">
                <p>Mataram, {{ $penawaran->created_at->format('M Y') }}</p>
                <img style="width:80px; height: 40px; margin-top: 0px" src="{{ asset('image/ttd.jpeg') }}" alt="">
                <p style="text-align: center">Jonatan Purba <br>
                <span style="font-weight: 500"> Account Manager</span></p>
                </div>
            </div>

            </div>



    </div>

    <div class="col-2">

    </div>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
