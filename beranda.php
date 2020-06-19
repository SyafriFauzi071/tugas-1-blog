<!DOCTYPE HTML>
<html>
<head>
	<title>WELCOME</title>
<style type = "text/css">
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
	background-color: black;
}
.style1 {font-weight: bold}
</style>
</head>
<body>
	<div id="canvas">
		<div id="header">
		<h2 align="center" class="style1">
	        <u> WELCOME	</u></h2>
		</div>
		
		<div id="menu">
			<ul>
				<li class="utama"><a href="beranda.php">Home</a></li>
						<li class="utama"><a href="?page=album">Album</a></li>
						<li class="utama"><a href="?page=photo">Photo</a></li>
						<li class="utama"><a href="?page=post">Post</a></li>
						<li class="utama"><a href="?page=categori">Categori</li>
				<li class="utama"><a href="logout.php">LOGOUT</a>
				</li>
		</div>

<div id="isi">
	
			<?php
				$page=@$_GET['page'];
				$action=@$_GET['action'];
				if($page=="album"){
					if($action==""){
					require_once "albumtampil.php";
					}
					}
				else if($page=="photo"){
					if($action==""){
						include"phototampil.php";
					}
					}
				else if($page=="post"){
					if ($action==""){
					include"posttampil.php";
				}
				}
				else if($page=="categori"){
					if ($action==""){
					include"categorytampil.php";
				}
				}else{
				echo "";
				}
				?>

		</div>

		<div id="footer">
			<font color=white>&copy;CopyRight</font>
		</div>
	</div>
	</body>
	</head>
	</html>