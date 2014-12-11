<?php
	   $host = "localhost";
	   $user = "root";
	   $pass = "";
	   $name = "project";
       
$koneksi = mysqli_connect($host, $user, $pass, $name);

if(mysqli_connect_errno()) {
		  die("<br/> koneksi DB gagal:".mysqli_connect_error()."(".mysqli_connect_errno() .")");
	   } 
?>