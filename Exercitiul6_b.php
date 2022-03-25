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
<title>Pentru componenta cu codul 'C1', cantitatea minimă, cantitatea medie și cantitatea maximă livrată de furnizori în funcție de unitatea de măsură, indiferent de proiect:</title>
</head>
<table align = "center">
<tr>
	<th>Unitate De Masura</th>
	<th>Cantitate Minima</th>
	<th>Cantitate Medie</th>
	<th>Cantitate Maxima</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Pentru componenta cu codul 'C1', cantitatea minimă, cantitatea medie și cantitatea maximă livrată de furnizori în funcție de unitatea de măsură, indiferent de proiect:</h1>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "SELECT um, MIN(cantitate), AVG(cantitate), MAX(cantitate)
	FROM Livrari
	WHERE idc = 'C1'
	GROUP BY um;";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['um']."</td><td>".$row['MIN(cantitate)']."</td><td>".$row['AVG(cantitate)']."</td><td>".$row['MAX(cantitate)']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>