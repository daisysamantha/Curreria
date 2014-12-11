<?php

require("database.php"); 

if (!$koneksi){
	die("koneksi ke data base gagal : " . mysqli_connect_error());
}



if(@$_POST["Login"]){
	$sql ="select username from logins where username='".$_POST["username"]."' and password='".md5($_POST["password"])."' ";
	$result = mysqli_query($koneksi, $sql);
	if (mysqli_num_rows($result) > 0){
	//numrows hanya untuk memastikan ada atau tidak sedangkan fetchrow untuk mencaridan mencetak data
	    SESSION_START();
		$_SESSION["username"] = $_POST["username"];
		
		Header("Location: ourmenu.php");
	}
	else{
	$sql ="select * from logins where username='".$_POST["username"]."' and password='".md5($_POST["password"])."' ";
	$result = mysqli_query($koneksi, $sql);
		if (mysqli_num_rows($result) > 0){
		//numrows hanya untuk memastikan ada atau tidak sedangkan fetchrow untuk mencaridan mencetak data
			SESSION_START();
			$_SESSION["username"] = $_POST["username"];

		Header("Location: ourmenu.php");
		}
		else{
		Header("Location: login.php");
		}
	}
}
else{
?>

<head>
<title>Churreria</title>
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
					</ul>
				
       </ul>
            </div>
            
        <div id="slider_image">
            <center><table>
			<td><form method="POST" action="login.php"><label><font color="black">

			<center>Username :</center></label>
			<br>
			<center><input type="text" name="username" value=""></br></center></br>

			<label><center><font color="black">Password:</center></label>
			<br>

			<center><input type="password" name="password" value=""></center></br>
			<br/><br/>
			
			<center><input type="submit" Value="Login" name="Login"><center>
			</td>
			</table></center>
			
            </div><!--End of Slider Image-->
        </div><!-- End of Slider -->
			
		<div id="footer_bawah">
            <center>Copyright &copy; 2014 by Daisy Shendy Stevanus</center>
        </div>
    </div><!-- End of Wrapper -->
</body>
<?php } ?>