<?php
	session_start();
	require 'functions.php';
	include 'config.php';
  	$nim=$_GET["nim"];
    $hal=$_GET["hal"];
    			if(dropinfo($nim)>0){
            //echo "<script>alert('info');<script>";
  				  header("location:$hal.php");
          }else {
          echo "<script>alert('informasi gagal dihapus');<script>";
          header("location:$hal.php");
  } 
?>