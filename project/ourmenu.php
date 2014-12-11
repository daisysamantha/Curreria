<?php
// koneksi.php
//1. Buat koneksi ke database

	   $host = "localhost";
	   $user = "root";
	   $pass = "";
	   $name = "project";
       
$koneksi = mysqli_connect($host, $user, $pass, $name);

if(mysqli_connect_errno()) {
		  die("<br/> koneksi DB gagal:".mysqli_connect_error()."(".mysqli_connect_errno() .")");
	   } 

if(isset($_POST['simpan'])) {
          $menu=$_POST['menu'];
		  $price=$_POST['price'];
		  $keterangan=$_POST['Keterangan'];
		  
		  $menu=mysqli_real_escape_string($koneksi,$menu);
		  $price=mysqli_real_escape_string($koneksi,$price);
		  $keterangan=mysqli_real_escape_string($koneksi,$keterangan);
		  
          $sql="INSERT INTO menu_makanan (menu_makanan,price,Keterangan,Status) values ('{$menu}','{$price}','{$keterangan}','No Status')"; 
          mysqli_query($koneksi,$sql); 		  
}
	   
if(isset($_GET['status'])) {

         if($_GET['status']==1) {
	        $sql="UPDATE menu_makanan SET status='On Progress'
		         WHERE code=$_GET[id]";
		}else if($_GET['status']==2) {
		    $sql="UPDATE menu_makanan SET status='Cancelled'
		         WHERE code=$_GET[id]";
		}else if($_GET['status']==3) {
		    $sql="UPDATE menu_makanan SET status='Done'
		         WHERE code=$_GET[id]";
		}else if($_GET['status']==4) {
		    $sql="DELETE FROM menu_makanan
			      WHERE code=$_GET[id]";
		}		  
		mysqli_query($koneksi,$sql);		 
}
				 
				 
	   
	   $sql="SELECT * from menu_makanan";
	   $hasil=mysqli_query($koneksi,$sql);
	   
	  
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Encounter Site</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="wrapper">
    	<div id="bg">
        &nbsp;
        </div>
    	<div id="header">
        	<div id="logo">
            	<img src="SOURCES/logo.jpg">
            </div>
        </div><!-- End of Header -->
        <div id="slider">
        	<div id="menu"> 
            	<ul>
                	<li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="ourmenu.php">Our Menu</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
					<li><a href="login.php">Login for Admin</a></li>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div><!-- End of Slider -->
            
            <div id="content_bawah">
			           
					   <h2>Menu Makanan</h2>

<form action="" method="POST">
    <label>Name : </label>
	<input type="text"
	       name="menu"
           value=""	/><br/>
		   
    <label>Price : </label>
	<input type="text"
	       name="price"
           value=""	/><br/>

    <select name="Keterangan">
           	<option value="Best Seller">Best Seller</option>
            <option value="Special">Special</option> 			
            <option value="Regular">Regular</option>
	</select>

    <input type="submit"
           name="simpan"
           value="Add" /><br/>
</form>

<br/><br/><br/>

<table border="1" width="100%">
        <thead>
		        <tr>
                      <th>Name</th>
					  <th>Price</th>
					  <th>Keterangan</th> 
                      <th>Status</th>
                      <th>Action</th>					  
                </tr> 
		</thead>
        <tbody  style="text-align:center">
		            <?php
					        while($baris = mysqli_fetch_assoc($hasil)) {
							   echo "<tr>";
							   echo "<td>".$baris['menu_makanan']."</td>";
							   echo "<td>".$baris['price']."</td>";
							   echo "<td>".$baris['Keterangan']."</td>";
							   echo "<td>".$baris['Status']."</td>";
							   echo "<td>";
							   echo "<a href='ourmenu.php?status=1&id=" . $baris['code'] . "'>Start</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| &nbsp&nbsp &nbsp &nbsp&nbsp  ";
							   echo "<a href='ourmenu.php?status=2&id=" . $baris['code'] . "'>Cancel</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| &nbsp&nbsp&nbsp&nbsp&nbsp   ";
							   echo "<a href='ourmenu.php?status=3&id=" . $baris['code'] . "'>Done</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| &nbsp&nbsp&nbsp &nbsp&nbsp    ";
							   echo "<a href='ourmenu.php?status=4&id=" . $baris['code'] . "'>Delete</a>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp| &nbsp&nbsp&nbsp&nbsp&nbsp   ";
							   echo "</td>";
							   echo "</tr>";
							}
					mysqli_free_result($hasil);
					?>
		            
        </tbody>		
</table>		   
						<center>
						<img src="SOURCES/menu2.jpg">
						<img src="SOURCES/menu3.jpg">
						<img src="SOURCES/menu4.jpg">
						<img src="SOURCES/menu5.jpg">
						</center></div>
            </div><!-- End of content_bawah-->

            <div id="footer_bawah">
            <center>Copyright &copy; 2014 by Daisy Shendy Stevanus</center>
            </div>
        </div><!-- End of Footer -->
    </div><!-- End of Wrapper -->
</body>

<?php
   mysqli_close($koneksi);
?>
