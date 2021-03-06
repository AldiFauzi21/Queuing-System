<?php
  session_start();
  include 'config.php';
  if(!isset($_SESSION['useremail'])){
  $_SESSION['useremail']="";
}
?>
<!doctype html>
<html lang="en">
<style type="text/css">
    .alert{
  background: #e44e4e;
  color: white;
  padding: 10px;
  text-align: center;
  border:1px solid #b32929;
}
  </style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        section{
          min-height: 420px; 
        }
      </style>
      <title>Masuk</title>
    </head>
    <body class="mt-5">
    <!--Navbar-->
    <script type="text/javascript">
    function periksa(){
      var email = document.getElementById("emailin").value;
      var password = document.getElementById("passwordin").value;
      if (email==""&&password==""){
        alert('Anda belum memasukkan data akun anda');
      }
      else{
        if (email == ""){
          alert('Anda belum memasukkan e-mail anda');
        }
        if (password == ""){
          alert('Anda belum memasukkan kata sandi anda');
        } else {
          if (password.length < 5||password.length > 35){                
            alert('Kata sandi anda mungkin salah, mohon untuk diperiksa kembali!');
          }
        }
      }
    }
</script>
    <script type="text/javascript">
      function batastamu(){
        alert("Maaf, anda belum terdaftar");
      }
    </script>
    <script type="text/javascript">
      function imagechange(){
        var image = document.getElementById('mata');
        var pass =document.getElementById('passwordin');
        if(image.src.match("img/seen.png")){
          image.src="img/unseen.png";
          pass.type="text";
        }
        else{
          image.src="img/seen.png";
          pass.type="password";
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
            </div>
              </nav>


          <!--login-->
          <div class="jumbotron jumbotron-fluid">
                <div class="container">
                        <div class="container">
                                    <?php 
                                      if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="gagal"){
                                          echo "<div  class='alert'>Data akun yang anda masukkan tidak sesuai</div>";
                                        }
                                      }
                                     ?>  
                                <div class="row">
                                   
                                      <!-- Gambar di samping -->
                                  <div class="col-sm">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <h5 class="card-title">Selamat Berjuang!</h5>
                                                    <p class="card-text">Respon Akhir
                                                    Praktikum Sistem Basis Data</p>
                                                    <p class="card-text"><small class="text-muted">2020/2021</small></p>
                                                  </div>
                                                  <img class="card-img-bottom" src="img/bg-sbd-login.jpg" alt="Card image cap">
                                                </div>
                                                </div>
                                  <div class="col-sm">
                                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                                            <center><div class="card-header">Selamat Datang</div></center>
                                                <div class="card-body text-dark">
                                                  <center><h6 class="card-title">
                                                  Silahkan masukkan data akun anda! 
                                                  </center>
                                                  </h6>
                                                    </div>
                                        <div class="container">
                                        <div class="card text-center">
                                                <div class="card-header">
                                                  Masuk
                                                </div>
                                                <div class="card-body">
                                                        <div class="container">
                                                                <div class="fixed-center">
                                                        <form action="periksa.php" method="POST">    
                                                                <div class="form-row align-items-center">
                                                                  <div class="col-auto">
                                                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                                                    <input type="text" class="form-control mb-2" id="emailin" name="email" placeholder="NIM Anda" value="<?php echo $_SESSION['useremail']; ?>">
                                                                  </div>
                                                                  <div class="col-auto">
                                                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                                    <div class="input-group mb-2">
                                                                      <div class="input-group-prepend">
                                                                        <div class="input-group-text"><img src="img/seen.png" id="mata" width="20" height="20" class="nav link" alt="O" onclick="imagechange()"></div>
                                                                      </div>
                                                                      <input type="password" class="form-control" id="passwordin" name="password" placeholder="Kata Sandi">
                                                                    </div>
                                                                  </div>
                                                                  
                                                                    <button type="submit" class="btn btn-primary mb-2" name="login" onclick="periksa()">Masuk</button>
                                                                  </div>
                                                                </div>
                                                              </form>
                                                              <p>Belum memiliki akun?</p>
                                                              <div class="col-sm">
                                                                  <div class="card mb-4">
                                                                      
                                                                    
                                                                    <a href="Daftar.php" class="btn btn-primary btn-lg active" role="button">Daftar</a>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="card-footer text-muted">
                                                </div>
                                              </div>
                                            </div>

                                  </div>
                                </div>
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