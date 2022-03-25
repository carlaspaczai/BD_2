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
	padding: 40px;
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
<title>Numele componentei din orașul 'Cluj-Napoca' livrată în cantitatea cea mai mică pentru proiecte situate în orașul 'Piatra Neamț':</title>
</head>
<table align = "center">
<tr>
	<th>Nume Componenta</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Numele componentei din orașul 'Cluj-Napoca' livrată în cantitatea cea mai mică pentru proiecte situate în orașul 'Piatra Neamț':</h1>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "call componenta_putina()";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['numec']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>