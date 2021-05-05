 <script type="text/javascript" src="logicals/main.js"></script>

<h2>A kapcsolat oldalon megadott adatok:</h2>
	<?php
	
	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}

		echo "Név: ".$_POST["nev"]."<br>";
		echo "Email: ".$_POST["email"]."<br>";
      echo "Szöveg: ".$_POST["szoveg"]."<br>";
	//echo "Kapott értékek: ";
	//echo "<pre>";
	//var_dump($_POST);
	//echo "</pre>";
?>
	
	
	
		
	
	
	
	
	
	
	
	
	