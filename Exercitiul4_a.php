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
    top: 1750px;
    left: 44%;
}
</style> 
<title>Numele furnizorilor, numele proiectelor, numele componentelor și orașul astfel încât toate se află în același oraș:</title>
</head>
<table align = "center">
<tr>
	<th>Nume Furnizor</th>
    <th>Nume Proiect</th>
    <th>Nume Componenta</th>
	<th>Oras</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Numele furnizorilor, numele proiectelor, numele componentelor și orașul astfel încât toate se află în același oraș:</h1>
<p></p>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "SELECT Furnizori.numef, Proiecte.numep, Componente.numec, Furnizori.oras
	FROM Furnizori JOIN Componente ON (Furnizori.oras = Componente.oras) JOIN Proiecte ON (Furnizori.oras = Proiecte.oras)";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['numef']."</td><td>".$row['numep']."</td><td>".$row['numec']."</td><td>".$row['oras']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>