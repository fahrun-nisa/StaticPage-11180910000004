
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Static Page</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="container">
		<div id="header">
		<img src="uinjkt.png" width="150px" height="100px" align="left">
		<center>
			<b><font yang size="6">Syarif Hidayatullah State Islamic University Jakarta </b></font></h1>
			<p>Jl. Ir H. Juanda No.95, Cempaka Putih, Kecamatan Cempaka Timur, Kota Tangerang Selatan, Banten 15412</p>
		</center>
			<ul id="navmenu">
				<li><a href="index.php" class="selected">Profil</a></li>
				<li><a href="?module=campus#pos">Campus Life</a></li>
				<li><a href="?module=about#pos">About</a></li>
			</ul>
		</div>
		
		<div id="page">
					<?php if(isset ($_GET['module']))
				include "$_GET[module].php";
			else 
				include "home.php";?> 
			</div>
			
		<div id="clear"></div>
		
		<div id="footer">
			<p>&copy; Fahrunnisa Informatics Engineering 2018</p>
		</div>
		
	</div>
</body>
</html>
</html>
