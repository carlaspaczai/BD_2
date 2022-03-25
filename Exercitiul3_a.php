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
<title>Detaliile furnizorilor din orașul cerut (ordonate descrescător după stare și crescător după numele furnizorilor):</title>
</head>
<table align = "center">
<tr>
	<th>ID Furnizor</th>
    <th>Nume Furnizor</th>
    <th>Stare</th>
	<th>Oras</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Detaliile furnizorilor din orașul cerut (ordonate descrescător după stare și crescător după numele furnizorilor):</h1>
<?php
	$or_fr = $_POST['or_fr'];
	$or_fr = trim($or_fr);
	if (!$or_fr)
	{
		echo 'GRESIT!';
		exit;
	}
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "SELECT *
	FROM Furnizori
	WHERE oras = '$or_fr'
	ORDER BY stare DESC, numef";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['idf']."</td><td>".$row['numef']."</td><td>".$row['stare']."</td><td>".$row['oras']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>