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
    <body style="font-size: 15px">


    <div class="container">
        <br>
        <form action="">

                <div class="row ml-2">
                    <div class="col-3">
                        <label for="tanggal" class="form-label">Tanggal Penandatanganan Kontrak</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="fab" class="form-label">Nomor FAB</label>
                        <input type="fab" class="form-control" id="fab" value="{{ $penawaran->id }}/FAB/NMA/{{ $penawaran->created_at->format('m/Y') }}">
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
                <div class="col-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="nama" class="form-control" id="nama" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal_lahir" class="form-label">Tempat tanggal Lahir</label>
                    <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Place & Date of Birth</label>
                    <input type="text" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="telepon" class="form-control" id="telepon" value="">
                </div>
                <div class="col-6">
                    <label for="mobile_phone" class="form-label">Mobile Phone</label>
                    <input type="mobile_phone" class="form-control" id="mobile_phone" value="">
                </div>
                <div class="col-6">
                    <label for="no_identitas" class="form-label">Kartu Identitas</label>
                    <input type="no_identitas" class="form-control" id="no_identitas" value="">
                </div>
                <div class="col-6">
                    <label for="no_identitas" class="form-label">Nomor Kartu Identitas</label>
                    <input type="no_identitas" class="form-control" id="no_identitas" value="">
                </div>
                <div class="col-6">
                    <label for="no_identitas" class="form-label">Masa Berlaku/Validity</label>
                    <input type="no_identitas" class="form-control" id="no_identitas" value="">
                </div>
            </div>


            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Informasi Perusahaan</p>
            </div>

            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Nama Perusahaan</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Group Perusahaan</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Jenis Perusahaan</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Alamat</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                    <label for="tanggal" class="form-label">Kota</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                    <label for="tanggal" class="form-label">Provinsi</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                    <label for="tanggal" class="form-label">Kode Pos</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>
            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Web Site</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Email</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">NPWP</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-6">
                    <label for="tanggal" class="form-label">Telepon</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>



            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Penanggung Jawab Teknisi</p>
            </div>
            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Nama</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-6">
                    <label for="tanggal" class="form-label">Bagian/Departemen</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>
            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Jabatan</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-6">
                    <label for="tanggal" class="form-label">Email</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>
            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Telepon</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-6">
                    <label for="tanggal" class="form-label">Mobile Phone</label>
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>


            <br><br><br> <br><br><br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Jenis Layanan</p>
            </div>

            <div class="row ml-2">
          
                <div class="form-group  col-3">
                    <label for="Add on Service">Connectivity</label>
                      <select name="Add on Service" id="Add on Service" class="form-control"  >
                        <option value="">Pilih</option>
                        <option value="Leased Circuit">Leased Circuit</option>
                        <option value="Eathernet Link">Eathernet Link</option>
                        <option value="IP-PVN Link">IP-PVN Link</option>
                      </select>
                     
                </div>
            
            <div class="col-3">
                <label for="tanggal" class="form-label">Product</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Package</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">UOM</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">QTY</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            </div>
            <div class="row ml-2">
          
                <div class="form-group  col-3">
                    <label for="Add on Service">Internet</label>
                      <select name="Add on Service" id="Add on Service" class="form-control"  >
                        <option value="">Pilih</option>
                        <option value="Dedicated Internet Acess">Dedicated Internet Acess</option>
                        <option value="IP Transit">IP Transit</option>
                        <option value="Broadband">Broadband</option>
                      </select>
                     
                </div>
            
            <div class="col-3">
                <label for="tanggal" class="form-label">Product</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Package</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">UOM</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">QTY</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            </div>
            <div class="row ml-2">
          
                <div class="form-group  col-3">
                    <label for="Add on Service">Satelit</label>
                      <select name="Add on Service" id="Add on Service" class="form-control"  >
                        <option value="">Pilih</option>
                        <option value="Transponder">Transponder</option>
                        <option value="TV Link">TV Link</option>
                        <option value="Media Hub">Media Hub</option>
                        <option value="Add On Uplink Facility">Add On Uplink Facility</option>
                      </select>
                     
                </div>
            
            <div class="col-3">
                <label for="tanggal" class="form-label">Product</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Package</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">UOM</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">QTY</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            </div>
            <div class="row ml-2">
          
                <div class="form-group  col-3">
                    <label for="Add on Service">Add On Services</label>
                      <select name="Add on Service" id="Add on Service" class="form-control"  >
                        <option value="">Pilih</option>
                        <option value="Manage Service">Manage Service</option>
                        <option value="CDN">CDN</option>
                        <option value="Anti DDoS">Anti DDoS</option>
                        <option value="Flexible Add On">Flexible Add On</option>
                        
                      </select>
                     
                </div>
            
            <div class="col-3">
                <label for="tanggal" class="form-label">Product</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-3">
                <label for="tanggal" class="form-label">Package</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">UOM</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>
            <div class="col-1">
                <label for="tanggal" class="form-label">QTY</label>
                <input type="tanggal" class="form-control" id="tanggal" value="">
            </div>

            </div>
           


            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Data Lokasi </p>
            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> </div>
                <div class="col-4">
                    <label for="tanggal" class="form-label">Asal/Origin</label>
                    
                </div>

                <div class="col-4">
                    <label for="tanggal" class="form-label">Tujuan/Destination</label>
                   
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Negara/Country</label></div>
                <div class="col-4">
                   
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-4">
                   
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>
            
            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Penyelenggara</label></div>
                <div class="col-4">
               
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-4">
                   
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>
            
            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Perusahaan</label></div>
                <div class="col-4">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-4">
                    
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Alamat</label></div>
                <div class="col-4">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-4">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Logitude/Latitude</label></div>
                <div class="col-2">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                    
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-2">
                    
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Penanggung Jawab</label></div>
                <div class="col-4">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-4">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Telepon</label></div>
                <div class="col-2">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                    
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-2">
                    
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
                <div class="col-2">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>

            <div class="row ml-2">
                <div class="col-4 mt-3"> <label for="tanggal" class="form-label">Email</label></div>
                <div class="col-8">
                  
                    <input type="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>



            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Ready For Service (RFS) </p>
            </div>
            <div class="row ml-2">
                <div class="col-4 mt-2"><label for="tanggal" class="form-label">Tanggal RFS Yang dijanjikan</label></div>
                <div class="col-6">
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>



            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Penanggung Jawab Teknisi </p>
            </div>

            <div class="row ml-2">
                <div class="col-6">
                    <label for="tanggal" class="form-label">Nama</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
              
                <div class="col-6">
                    <label for="tanggal" class="form-label">Bagian</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-6">
                    <label for="tanggal" class="form-label">Jabatan</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
              
                <div class="col-6">
                    <label for="tanggal" class="form-label">Email</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-6">
                    <label for="tanggal" class="form-label">Telepon</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
              
                <div class="col-6">
                    <label for="tanggal" class="form-label">Mobile Phone</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
            </div>

            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Jangka Waktu Berlangganan</p>
            </div>
            <div class="row ml-2">

            
            <div class="col-6">
                <label for="tanggal" class="form-label">Jangka Waktu Berlangganan</label>
                <input type="Date" name="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>


            <br> <br><br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Biaya</p>
            </div>

            <div class="row ml-2">
                <div class="col-3 mt-2">  <label for="tanggal" class="form-label">Mata Uang</label></div>
                <div class="col-3"> <input type="Text" name="tanggal" class="form-control" id="tanggal" value=""></div>
            </div>
<br>
<div class="row ml-4">

    <label style="font-weight: 700" for="">BIAYA INSTALASI PEMASANGAN / INSTALATION CHARGES</label>
</div>
            <div class="row ml-2"style="font-size: 14px">
            
        
                <div class="col-3">
                <label for="tanggal" class="form-label">Product/Layanan</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                 <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Instalasi Port</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                 <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Instalasi Local Access</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

              

                <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Instalasi Sub Total Lain-Lain</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
                
                <div class="col-3">
                <label for="tanggal" class="form-label">PPN/VAT</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-3">
                    <label for="tanggal" class="form-label">Total</label>
                    <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                    </div>

            </div>

            <br><br>
            <div class="row ml-4">

                <label style="font-weight: 700" for="">BIAYA BULANAN / MONTHLY CHARGES</label>
            </div>
            <div class="row ml-2" style="font-size: 14px">
            
        
                <div class="col-3">
                <label for="tanggal" class="form-label">Product/Layanan</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                 <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Bulanan Port</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                 <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Bulanan Local Access</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

              

                <div class="col-3">
                <label  for="tanggal" class="form-label">Biaya Bandwith On Demand Schedule</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>
                
                <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Bulanan CPE</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-3">
                <label for="tanggal" class="form-label">Biaya Bulanan Lain-Lain</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-3">
                <label for="tanggal" class="form-label">Sub Total</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-3">
                <label for="tanggal" class="form-label">PPN/VAT</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

                <div class="col-3">
                <label for="tanggal" class="form-label">Total</label>
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>

            </div>


            <br>
            <div class="" style="background:  #C7F2FF">
                <p class=" ml-2 p-2">Alamat Tagihan </p>
            </div>
            <div class="row ml-3">
                <div class="col-3">
                <label for="tanggal" class="form-label">Alamat Tagihan</label>
                </div>
                
                <div class="col-9">
                <input type="Text" name="tanggal" class="form-control" id="tanggal" value="">
                </div>    
                <div class="col-12 mt-3">
                    <p>Dengan ini kami menyatakan bahwa informasi yang kami berikan diata adalah benar dan akurat</p>
                </div>
            </div>


        <div class="row ml-2 mt-5 mb-5">
            <div class="col-3 ">
                <label for="">Tanda tangan/Signature</label><br>
               
            </div>
            <div class="col-3">
                <label  for="">Nama Penjual</label>
            
            </div>
            <div class="col-6">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" value="">
            </div>
        </div>
        <br><br>
        <div class="row ml-3 mt-5">
            <label for="tanggal" class="form-label">Catatan/Note</label>
            <input type="text-area" name="tanggal" class="form-control" id="tanggal" value="">
        </div>


        <div class="row mt-5">
            <div class="col-4 text-center">
                <label for="tanggal" class="form-label">PT.Netzen Media Akses</label><br><br><br><br> 
                <hr>  
                <label for="">Group Head/Head of Region</label>
            </div>
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <label for="tanggal" class="form-label">Pemohon/applicant</label><br><br><br><br>
                <hr>
                
            </div>
          
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                *)Diisi bila pembayaran dengan sistem single End Billing/Please fill up if Single End Billing is appiled <br>
                **)Ditandatangani oleh Pejabat yang berwenang atau yang di kuasakan/Signed by authorizedpersonor to whom it my connecerned
            </div>
        </div>

        </form>

    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
