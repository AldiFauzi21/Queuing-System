<?php
session_start();
require 'functions.php';
include 'config.php';
$pengguna = query("SELECT * FROM praktikan where asisten = 'naim' ");
$query = "SELECT * FROM praktikan where asisten = 'naim' ";
    mysqli_query ($conn, $query); //menjalankan query-nya
    
    $count = mysqli_affected_rows($conn); 
$nim = $_SESSION['nim'];
$nim = substr($nim, 0, 9);
//jika tombol cari diklik, kita akan timpa $pengguna dengan data pengguna sesuai dengan pencariannya
?>
<!doctype html>
<html lang="en">
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
        .add{
    color: grey;
    padding: 10px;
    text-align: left;
    font-size: 10pt;
  }
  .mini {
          transition: transform .2s; /* Animation */
          margin: 0 auto;
          width: 75%;
        }

        .mini:hover {
          transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
      </style>
      <title>Informasi</title>
    </head>
    <body class="mt-5">
             <!--Navbar-->
             <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                    <a class="navbar-brand" href="naim.php">RESPON AKHIR SBD (<?=$nim?>)</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="bim.php">Bim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="haidar.php">Haidar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="farah.php">Farah</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="agil.php">Agil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="latifa.php">Latifa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="marcel.php">Marcel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="rico.php">Rico</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="angga.php">Angga</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="naim.php">Naim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aldi.php">Aldi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                  </ul>
                    </div>
                  </nav>
                </div>
                  </nav>

<!--Info Komunitas-->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
                  <div class="row">
                    <div class='com-ms'>
                        <h1 class="display-4">NADRATUL NAIM</h1>
                        <?php
                          if($nim!='F1D018087'&&$count<4){
                            echo "<a href='ok.php?nim=".$nim."&hal=naim'><img class='mini' src='img/complete1.png' style='max-height: 100px; max-width: 75px' ></a>";
                          }
                      ?>
                        <p class="lead">QUERY TABEL TUNGGAL DAN BEBERAPA TABEL</p>
                    </div>
                </div>
                </div>
    <div class="container">

<div class="container">
  <div class="row">
  <?php foreach( $pengguna as $row ) : ?>
  <div class="col-sm">
    <div class="card" style="width: 15rem;">
      <img src="<?php if ($row['foto' ]==null){echo 'img/picture13.png';}else{echo $row['foto' ];} ?>" class="card-img-top" alt="Gambar tidak bisa dimuat">
      <div class="card-body">
      <h5 class="card-title"><?php echo $row["nama" ]; ?> (<?php echo $row["nim" ]; ?>)</h5>
      <p class="card-text"><a href="<?php echo $row["gmeet" ]; ?>"><?php echo $row["gmeet" ]; ?></a></p>
      <p class="card-text">
        <div class="d-flex bd-highlight">
          <div class='p-2 bd-highlight'>
            <?php

              if($nim == $row['nim']){
                echo "<a href='sunting.php?nim=".$row['nim']."&hal=naim'><img class='mini' src='img/pencil1.png'></a>";
              } else {
                echo "<img class='mini' src='img/cancel1.png'>";
              }
          ?>
          </div>
          <div class='p-2 bd-highlight'>
          <?php
              if($nim=='F1D018087'||$nim==$row['nim']){
                echo "<a href='dropinfo.php?nim=".$row['nim']."&hal=naim'><img class='mini' src='img/trash2.png'></a>";
              } else {
                echo "<img class='mini' src='img/cancel1.png'>";
              }
          ?>
        </div>
        </div>
        <center><p class="add">Kelompok <?php echo $row["kelompok" ]; ?></p></center>
      </p>
    </div>
    </div>
  </div><hr>
  <?php endforeach; ?>
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