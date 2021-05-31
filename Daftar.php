<?php

  session_start();

  include 'config.php';

?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!--My CSS-->



    <style>

      section{

        min-height: 420px; 

      }

      .alert{

    background: #e44e4e;

    color: white;

    padding: 10px;

    text-align: center;

    border:1px solid #b32929;

  }

  .conf{

    background: #00C957 ;

    color: white;

    padding: 10px;

    text-align: center;

    border:1px solid #00C957  ;

  }

  .add{

    color: grey;

    padding: 10px;

    text-align: left;

    font-size: 10pt;

  }

  .warn{

    color: red;

    padding: 10px;

    text-align: left;

    font-size: 10pt;

    max-height: 5pt;

  }

  .form-check-label{

    font-size: 10pt;

  }

    </style>

    <title>Daftar</title>

  </head>

  <body class="mt-5">

    <!--Navbar-->

    <script type="text/javascript">

      function batastamu(){

        alert("Maaf, anda belum terdaftar");

      }

    </script>

    <script type="text/javascript">

  function validasi_form_input(){

    var konfirmasi = confirm("Apakah anda yakin dengan data diri anda?");

    if(konfirmasi === true) {

      var nama = document.getElementById("nama").value;

      var prov = document.getElementById("prov").value;

      var kota = document.getElementById("kota").value;

      var password = document.getElementById("pass").value;

      var password2 = document.getElementById("pass2").value;

      var text = "";

      if (nama==""prov==""&&kota==""&&password==""&&password2==""){

        alert('Anda belum mengisi apapun');

      }

      else{

        if (nama == ""){

          text += "- Nama lengkap \n";

        }

        if (prov == ""){

          text += "- NIM \n";

        }

        if (kota == ""){

          text += "- Kelompok \n";

        }

        if (password == ""){

          text += "- Kata Sandi \n";

        } else {

          if (password.length < 5){

            alert('Kata sandi minimal 5 karakter');

          }

          if (password.length > 35){

            alert('Kata sandi anda terlalu panjang, mohon untuk menggunakan kata sandi yang mudah anda ingat!');

          }

        }

        if (nama==""||prov==""||kota==""||password==""){

          alert('Anda belum mengisi : \n'+ text);

        }

        if (password2 == ""){

          alert('Anda belum mengonfirmasi kata sandi anda');

        } else {

          if (password != password2){

            alert('Konfirmasi kata sandi anda salah');

          }

        }

      }

    }

  }

</script>

               <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="Beranda.html">RESPON AKHIR SBD 2020</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
              </nav>

<!--Sign up-->

                <div class="jumbotron jumbotron-fluid">

                        <div class="container">

                        <?php 

                          if(isset($_GET['pesan'])){

                            if($_GET['pesan']=="gagal"){

                              echo "<div  class='alert'>Maaf, e-mail yang anda masukkan sudah terdaftar.<br> Mohon untuk menggunakan e-mail lain!</div>";

                              //echo "<div  class='alert'>Status WA : ",$_SESSION['WhatsApp']," <br> alamat : ",$_SESSION['test'],"</div>";

                            }

                            else if($_GET['pesan']=="disallowed"){

                              echo "<div  class='conf'>Maaf, anda belum terdaftar untuk mengakses fitur kamus daring. <br> Silahkan mendaftar terlebih dahulu!</div>";

                            }

                            else{

                              echo "<h4 class='display-4'>Pendaftaran Respon Akhir</h4>";

                            }

                          }else{

                              echo "<h4 class='display-4'>Pendaftaran Respon Akhir</h4>";

                          }

                        ?>

                          <div class="container">

                                  <form action="input.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">

                                        <label for="nama">Nama Lengkap</label>

                                        <input type="text" class="form-control" id="nama" name="fullname" placeholder="Nama Lengkap Anda">

                                     
                                      <div class="form-row">

                                        <div class="form-group col-md-6">

                                          <label for="prov">NIM</label>

                                          <input type="text" id="prov" name="prov" class="form-control"placeholder="NIM Anda"><label class="add" for="pass">

                                          </label>

                                        </div>

                                        <div class="form-group col-md-6">

                                          <label for="kota">Kelompok</label>

                                          <select class="form-control" id="kota" name="kota">
                                            <option value="1A">1A</option>
                                            <option value="1B">1B</option>
                                            <option value="2A">2A</option>
                                            <option value="2B">2B</option>
                                            <option value="3A">3A</option>
                                            <option value="3B">3B</option>
                                            <option value="4A">4A</option>
                                            <option value="4B">4B</option>
                                            <option value="5A">5A</option>
                                            <option value="5B">5B</option>
                                            <option value="6A">6A</option>
                                            <option value="6B">6B</option>
                                            <option value="7A">7A</option>
                                            <option value="7B">7B</option>
                                            <option value="8A">8A</option>
                                            <option value="8B">8B</option>
                                            <option value="9A">9A</option>
                                            <option value="9B">9B</option>
                                            <option value="10">10</option>
                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-row">

                                        <div class="form-group col-md-6">

                                          <label for="pass">Kata Sandi</label>

                                          <input type="password" class="form-control" id="pass" name="pass" placeholder="Kata Sandi Anda"><label class="add" for="pass">

                                            Gunakan 5 sampai 35 karakter!

                                          </label>

                                        </div>

                                        <div class="form-group col-md-6">

                                          <label for="pass2">Konfirmasi Kata Sandi</label>

                                          <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Konfirmasi Kata Sandi Anda">

                                        </div>

                                      </div>
                                      <div class="form-group">
                                        <label for="upload">Foto Formal</label>
                                        <input type="file" class="form-control-file" name="gambar" >
                                      </div>

                                      <button name="upload" type="submit" class="btn btn-primary" onclick="validasi_form_input()">Daftar</button>

                                    </form>

                                  </div>

                        </div>

                      </div>

<center><footer style="font-size: 10pt; color: grey;">

    <p>copyright. praktikum.sbd.2020</p>

    </footer></center>

              <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>