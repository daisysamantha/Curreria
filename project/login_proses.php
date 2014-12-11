<?php
     
	 session_start();
	 
	 $koneksi=mysqli_connect("localhost","root","","university");
	 
	 $User=$_POST['username'];
	 $Password=$_POST['password'];
	 
	 $sql="select * from login
	       where username='$User'";
		   
     $hasil=mysqli_query($koneksi,$sql);
	 
	 if(mysqli_num_rows($hasil)==0) //cek apakah hasil query menemukan username yang cocok
	 {
	     echo "Username tidak di ketemukan. ";	 
		 
     }
	 
	 else
	 {
	     echo "Username di Temukan ";
		 
		 $baris=mysqli_fetch_assoc($hasil);
		 
		 $format="$2y$10$";
         $hash="anusanusanusanusanus06";
         $salt=$format.$hash;

         $newpass=crypt($Password,$salt);
		 
		 if($newpass==$baris['Password'])
		 {
		     echo "Anda Berhasil Masuk";	
			 $_SESSION['login']=1;
			 header("location:halaman_login.php");
         
		 }
		 
		 else
		 {
		     echo "Password anda salah";
		 }
     }

?>