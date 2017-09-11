<?php
    //Muutujad
	$myName = "Kennet";
	$myFamilyName = "Kukk";
    $practiceStarted = "2017-09-11 8.15";

    //echo strtotime($practiceStarted);
    //echo strtotime("now");
    //$timePassed = strtotime("now");	- strtotime($practiceStarted);
    //echo $timePassed;

	$hourNow = date("H");
	
	$partOfDay = "";
	
	if ($hourNow < 8){
	    $partOfDay = "varane hommik";
	}
	if ($hourNow >= 8){
		$partOfDay = "koolipaev";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kennet Kukk veebriprogremise asjad</title>
</head>
<body>
    <h1>Kennet Kukk</h1>
    <p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavalt sisu.</p>
    <p>============================================================================================================</p>
	
	<?php
	echo "<p>Tana on vastik ilm!</p>";
	echo "<p>Tana on ";
	echo date("d.m.Y");
	echo ".</p>";
	echo "<p>Lehe laadimise hetkel oli kell: " .date("H:i:s") ."<?p>";
	echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP kaivitatakse lehe laadimisel ja siis tehakse kogu too ara. Hiljem, kui midagi vaja jalle "kalkuleerida", 
	siis laetakse kogu leht uuesti.</p>
	<?php
        echo "<p>Lehe autori taisnimi on: " .$myName ." " .$myFamilyName .".</p>";	
	?>
    
</body>
</html>