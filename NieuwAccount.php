<!DOCTYPE html>
<?php
//Niet vergeten aanhalingstekens na te kijken bij <nav>
include ('config.php');
?>
<html>
<head>
<title>Admin account toevoegen</title>
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
</html>