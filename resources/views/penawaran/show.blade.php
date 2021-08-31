{{-- <html lang="en">
<head>
  <title>Bootstrap Jquery Add More Field Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">


        <form action="action.php" method="POST">
    <table class="form-input">
        <tr>
            <td>
                <div class="input-group control-group ">
                    <input type="date" name="addmore[]" class="form-control" placeholder="tanggal">
                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="lokasi">
                </div>
            </td>

            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="koordinar A">

                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="koordinat B">
                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="bandwith">
                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="kontrak">
                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="monthly bandwith">
                </div>
            </td>
            <td>
                <div class="input-group control-group ">
                    <input type="text" name="addmore[]" class="form-control" placeholder="otc">
                    <div class="input-group-btn">
                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                        </div>
                </div>
            </td>

        </tr>

    </table>
        <div class="control-group text-center">
            <br>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
        </form>


        <!-- Copy Fields -->
        <div class="copy hide">
            <table class="control-group">
                <tr>
                    <td>
                        <div class=" input-group" style="margin-top:10px">
                            <input type="date" name="addmore[]" class="form-control" placeholder="tanggal">

                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="lokasi">

                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="koordinat A">
                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="koordinat B">
                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="bandwith">
                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="kontrak">
                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="monthly bandwith">
                    </td>
                    <td>
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="otc">
                            <div class="input-group-btn">
                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                    </td>

                </tr>
            </table>

            </div>


        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".form-input").after(html);
      });
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html> --}}

@extends('layouts.main')
@section('content')
<div class="container">
                {{-- <table class="table table-bordered">
                <thead class="thead bg-light text-center">
                    <tr>

                        <th scope="col">Tanggal</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Site_a</th>
                        <th scope="col">Site_b</th>
                        <th scope="col">BW</th>
                        <th scope="col">Kontrak</th>
                        <th scope="col">Monthly BW</th>
                        <th scope="col">OTC</th>
                    </tr>
                    </tr>
                </thead>
                <tbody> --}}
                    {{-- @foreach ($penawarans as $penawaran) --}}

                        {{-- <tr>
                            <td>{{ $penawaran->tanggal}}</td>
                            <td>{{ $penawaran->lokasi}}</td>
                            <td>{{ $penawaran->site_a}}</td>
                            <td>{{ $penawaran->site_b}}</td>
                            <td>{{ $penawaran->bw}}</td>
                            <td>{{ $penawaran->kontrak}}</td>
                            <td>{{ $penawaran->monthly_bw}}</td>
                            <td>{{ $penawaran->otc}}</td>

                        </tr> --}}
                    {{-- @endforeach --}}

            {{-- </table> --}}

            <h5 class="card-text"> {{ $penawaran->lokasi }}</h5>
            <h6 class="card-text ">{{ $penawaran->site_a }}</h6>
            <h6 class="card-text">{{ $penawaran->kontrak }}</h6>

</div>
@endsection
