<?php
	include "koneksi.php";
		session_start();


		if (isset($_SESSION['login'])) {
			$admin = $koneksi->prepare('SELECT * FROM login WHERE username = :username and password = :password');
			$admin->execute(array(
                  ':username' => $_POST['username'],
                  'password' => $_POST['password']
                  ));
		header('location:beranda.php');


	}else{

$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $koneksi->prepare('SELECT * FROM login WHERE username = :username and password = :password');
$admin->execute(array(
                  ':username' => $_POST['username'],
                  'password' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if(empty($row['username'])){

echo "<script>alert('password anda salah')</script>";

}else {

$_SESSION['username'] = $_POST['username'];

header("location: beranda.php");
}
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Halaman Login</title>
<style type="text/css">
body{
	font-family:arial;
	font-size:14px;
	background-color: black;
}

#canvas{
	width :1040px;
	margin:0 auto;
	border:1px solid white;

}
#header{
	font-size:20px;
	padding:50px;
	color:black;
	background-color: white;
}
#menu{
	background-color:black;
}
#menu ul{
	list-style:none;
	margin:0;
	padding:0;
}
#menu ul li.utama{
	display:inline-table;
}
#menu ul li:hover{
	background-color:black;
}
#menu ul li a{
	display:block;
	text-decoration:none;
	line-height:40px;
	padding:0 10px;
	color:white;
}
.utama ul{
	display:none;
	position:absolute;
	z-index:2;
}
.utama:hover ul{
	display:block;
}
.utama ul li{
	display:block;
	background-color:black;
	width:140px;
}
#isi{
	min-height:400px;
	padding:20px;
	background-color:#FFFFFF;
	background-repeat:no-repeat;
	border:groove;
	
	
}

#footer{
	text-align:center;
	padding:20px;
	background-color: black);
}
.style1 {font-weight: bold}
</style>
</head>
<body>
	<div id="utama">
		<div class="style1" id="judul">
			Silahkan Login		</div>
		
		<div id="inputan">
			<form action="" method="post">
				<div>
					<input type="text" name="username"class="lg" />
				</div>
				
				<div style="margin-top:10px;">
				  <input type="password" name="password"class="lg" />
				</div>
				<div style="margin-top:10px;">
				  <input type="submit" name="login" value="Login" class="btn1" />
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>
			