<!DOCTYPE html>
<?php
//Niet vergeten aanhalingstekens na te kijken bij <nav>
include ('config.php');
?>
<html>
<head>
<title>Overzicht Leerlingen</title>
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
<br/>
<br/>
<h1><center>Overzicht leerlingen</center></h1>
</body>
</html>
<?php

$query="SELECT * FROM leerling";
$stm=$con->prepare($query);
if($stm->execute()){
	$result=$stm->fetchAll(PDO::FETCH_OBJ);
	echo '<div class="overzicht"><table width="50%">';
	echo '<th>Leerlingnummer</th><th>Achternaam</th><th>Voornaam</th><th>Geboortedatum</th><th>Gezondheid</th><th>Ziek van</th><th>Ziek tot</th>';
	foreach($result as $lln){
		echo '<tr><td>'.$lln->llnId.'</td><td>'.$lln->llnAchternaam.'</td><td>'.$lln->llnVoornaam.'</td><td>'.date("d-m-Y", strtotime($lln->geboortedatum)).'</td><td>'.$lln->gezondheid.'</td><td>'.$lln->ziekVan.'</td><td>'.$lln->ziekTot.'</td></tr>' ; 
	}
	echo '</table></div>';
}

?>