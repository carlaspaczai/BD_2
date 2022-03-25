<!DOCTYPE html>
<html>
<head>
<style>  
th {
	border: 1px solid black;
	border-radius: 10px;
    background-color: #ffffff;
}  
td {  
	border: 1px solid black;
	border-radius: 10px;
    background-color: #b02a69;
	padding: 10px;
	color: white;
}
h1 {
	color: white;
	text-align: center;
}
body {
	background-image: url('image.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
button {
	background-color: #b02a69;
	color: #ffffff;
	padding: 14px 40px;
	border-radius: 10px;
	border: 1px solid #ffffff;
	position: absolute;
    top: 910px;
    left: 44%;
}
</style> 
<title>Pentru fiecare proiect, cantitatea totală livrată indiferent de furnizor pentru fiecare piesă și unitate de măsură:</title>
</head>
<table align = "center">
<tr>
	<th>Nume Proiect</th>
	<th>Nume Componenta</th>
	<th>Unitate De Masura</th>
	<th>Cantitate Totala</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Pentru fiecare proiect, cantitatea totală livrată indiferent de furnizor pentru fiecare piesă și unitate de măsură:</h1>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "call proiect_cantitate_totala()";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['proiect']."</td><td>".$row['piesa']."</td><td>".$row['um']."</td><td>".$row['cantitate_totala']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>