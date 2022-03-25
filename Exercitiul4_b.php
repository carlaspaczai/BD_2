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
<title>Perechile de coduri de proiecte cu condiția ca ambelor proiecte să le fie livrată de același furnizor aceeași piesă în aceeași cantitate și aceeași unitate de măsură:</title>
</head>
<table align = "center">
<tr>
	<th>ID Proiect #1</th>
    <th>ID Proiect #2</th>
</tr>
<body style = "background-color: #a90aff;"> 
<h1>Perechile de coduri de proiecte cu condiția ca ambelor proiecte să le fie livrată de același furnizor aceeași piesă în aceeași cantitate și aceeași unitate de măsură:</h1>
<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "colocviu_final_spaczai_carla";
	$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$sql = "call perechi_idp()";
	if($result = mysqli_query($connection, $sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['idp1']."</td><td>".$row['idp2']."</td></tr>";
		}
	}
?>
<button onclick = "document.location = 'Index.html'">Meniul Exercitiilor</button>
</body>
</html>