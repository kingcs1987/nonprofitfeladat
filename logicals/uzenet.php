<?php

    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=beadando', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
		
		 $sqlInsert = "insert into kapcsolat(id, nev, email, uzenet)
                          values(0, :nev, :email, :szoveg)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
                                 ':uzenet' => $_POST['szoveg'] )); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
	$ujra = true; }

?>