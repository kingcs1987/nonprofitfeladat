<?php
	try {
		// Kapcsolódás
		$pdo = new PDO('mysql:host=localhost;dbname=beadando', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$utasitas = "Select id, nev, email, uzenet From kapcsolat Where id<10";
		$eredm = $pdo->query($utasitas);
	}
	catch (PDOException $e) {
		echo "Hiba: ".$e->getMessage();
	}      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kiíratás</title>
        <meta charset="utf-8">
		<style>
			table, td, tr {
				border: 1px  solid black;
			}
		</style>
    </head>
    <body>
	<h1>A felhasználóktól kapott üzenetek listája</h1>
	<table>
	<?php foreach ($eredm as $sor)
		print "<tr><td>" . $sor['id'] . "</td>"  . " <td>" .$sor['nev'] . "<td>" . $sor['email'] . "</td>"  . " <td>" .$sor['uzenet'] ."</td></tr>";
	?>
	</table>
    </body>  
</html>

<br><br><br><br><br><br><br><br><br><br>