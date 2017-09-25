<?php
	$dirToRead = "../../images/";
	//kuna tahan ainult pildifaile, siis filtreerin
	$imageFileTypes = ["jpg", "jpeg", "png", "gif"];
	$imageFiles = [];
	$allFiles = array_slice(scandir($dirToRead),2);
	//var_dump($allFiles);
	
	//tsukkel, mis tootab ainult massiividega
	foreach ($allFiles as $file){
		$fileType = pathinfo($file, PATHINFO_EXTENSION);
		//kas see tuup on lubatud nimekirjas
		if (in_array($fileType, $imageFileTypes) == true){
			array_push($imageFiles, $file);
		}
	}//foreach loppeb
	//var_dump($imageFiles);
	
	//mitu pilti on?
	$fileCount = count($imageFiles);
	$imageNumber = mt_rand(0, $fileCount - 1);
	$imageToShow = $imageFiles[$imageNumber];
	

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Kenneti veebiprogemise asjad
	</title>
</head>
<body>
	<h1>Kennet Kukk</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p>Olen tubli tark ja ilus!</p>
	<p> Üks pilt Tallinna Ülikoolist!</p>
	<img src="<?php echo $dirToRead .$imageToShow ?>" alt="Tallinna Ülikool">
	

</body>
</html>
