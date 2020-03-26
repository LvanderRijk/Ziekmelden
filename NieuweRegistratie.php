<!DOCTYPE html>
<?php
//Niet vergeten aanhalingstekens na te kijken bij <nav>
include ('config.php');
?>
<html>
<head>
<title>Registreren Nieuwe Leerling</title>
<link rel="stylesheet" href="Style.css">
</head>
<body>

	<nav>
		<ul>
			<li><?php echo '<a href="Overzicht.php'/*'?userID='.$UserID.'&session='.$Username.''*/.'">Overzicht</a>'?></li>
			<li><?php echo '<a href="Ziekmelden.php'/*?userID='.$UserID.'&session='.$Username.'"'*/.'">Leerling ziekmelden</a>'?></li>
			<li><?php echo '<a href="NieuweRegistratie.php'/*?userID='.$UserID.'&session='.$Username.'"'*/.'">Leerling aanmelden</a>'?></li>
			<li><?php echo '<a href="NieuwAccount.php'/*?userID='.$UserID.'&session='.$Username.'"'*/.'">Admin toevoegen</a>'?></li>
		</ul>
	</nav>
<header><img src="curio.png" height="100px" width="300px"/></header>
<div class="aanmelden">
<h1>Aanmelden nieuwe leerling</h1>
<form method="POST">
<table colspan="2">
<tr><th>Voornaam: </th><td><input type="text" name="voornaam" placeholder="Jan"/></td></tr>
<tr><th>Achternaam: </th><td><input type="text" name="achternaam" placeholder="Janssen"/></td></tr>
<tr><th>Geboortedatum </th><td><input type="date" name="geboortedatum" /></td></tr>
<tr><th><input type="submit" name="btnSubmit" value="Aanmelden"/></th></tr>
</table>
</form>
</div>
</body>
</html>
<?php

if (isset($_POST['btnSubmit'])){
	$Voor=$_POST['voornaam'];
	$Achter=$_POST['achternaam'];
	$Date= date("Y-m-d", strtotime($_POST['geboortedatum']));
	$query="INSERT INTO leerling (llnId, llnVoornaam, llnAchternaam, geboortedatum, gezondheid, ziekVan, ziekTot) VALUES (0,'$Voor','$Achter','$Date','Gezond','-','-')";
	$stm=$con->prepare($query);
	if ($stm->execute()){
		echo 'Leerling succesvol aangemeld.';
	}
	else{
		echo 'fout met leerling aanmelden.';
	}
}

?>