<!DOCTYPE html>
<?php
//Niet vergeten aanhalingstekens na te kijken bij <nav>
include ('config.php');
?>
<html>
<head>
<title>Ziekmelden Leerling</title>
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
</body>
<h1><center>Ziekmelden Leerling </center></h1>
<br/>
<br/>
<?php

$query="SELECT llnId, llnVoornaam, llnAchternaam FROM leerling";
$stm=$con->prepare($query);
if ($stm->execute()){
	echo '<div class="ziekmelden"><table width="50%"><form method="POST"><tr><td><select name="leerling">';
	$result=$stm->fetchAll(PDO::FETCH_OBJ);
	foreach ($result as $lln){
		echo "<option value='$lln->llnId'>$lln->llnId. $lln->llnAchternaam, $lln->llnVoornaam </option>";
	}
	echo '</td></select>';
	echo '<td><select name="gezondheid"> <option value="Gezond">Gezond</option><option value="Geoorloof Afwezig">Geoorloofd Afwezig</option><option value="Ongeoorloofd afwezig">Ongeoorloofd Afwezig</option><option value="Ziek">Ziek</option></select></td>';
	echo '<td>Van: <input type="date" name="ziekVan"/>  Tot: <input type="date" name="ziekTot"/></td></tr>';
	echo '<tr><td><input type="submit" name="btnSubmit" value="Wijzigen"/></td></tr>';
	echo '</form></table></div>';
}
if(isset($_POST['btnSubmit'])){
	$llnId=$lln->llnId;
	$gezond=$_POST['gezondheid'];
	$ziekVan=$_POST['ziekVan'];
	$ziekTot=$_POST['ziekTot'];
	$query="UPDATE leerling SET gezondheid='$gezond', ziekVan='$ziekVan', ziekTot='$ziekTot' WHERE llnId=$llnId";
	var_dump($query);
	$stm=$con->prepare($query);
	if($stm->execute()){
		echo 'Wijziging aangebracht.';
	}
	else{
		echo 'Wijzigen mislukt.';
	}
}
?>
</html>