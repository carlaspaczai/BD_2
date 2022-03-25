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
	padding: 20px;
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
    bottom: 5%;
    right: 5%;
}
</style> 
<title>Detaliile componentelor care au culoarea 'alb'‚ 'negru' sau 'galben' (ordonate crescător după culoare, numele componentelor și masă):</title>
</head>
<table align = "center">
<tr>
	<th>ID Componenta</th>
    <th>Nume Componenta</th>
    <th>Culoare</th>
	<th>Masa</th>
	<th>Oras</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Detaliile componentelor care au culoarea 'alb'‚ 'negru' sau 'galben' (ordonate crescător după culoare, numele componentelor și masă):</h1>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "SELECT *
	FROM Componente
	WHERE LOWER(culoare) IN ('alb', 'negru', 'galben')
	ORDER BY culoare, numec, masa";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['idc']."</td><td>".$row['numec']."</td><td>".$row['culoare']."</td><td>".$row['masa']."</td><td>".$row['oras']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>