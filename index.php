<?php 
	date_default_timezone_set("Europe/Amsterdam");
	$d = date("H:i:s");

	$morning = date("06:00");
	$afternoon = date("12:00");
	$evening = date("18:00");
	$night = date("00:00");

	if ($d >= $morning && $d < $afternoon){
		$bgc = "img/morning.png";
		$text = "Goede morgen!";
	} else if ($d >= $afternoon && $d < $evening){
		$bgc = "img/afternoon.png";
		$text = "Goede middag!";
	} else if ($d >= $evening && $d < $night){
		$bgc = "img/evening.png";
		$text = "Goede avond!";
	} else if ($d >= $night && $d < $afternoon){
		$bgc = "img/night.png";
		$text = "Goede nacht!";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="1">
		<title>Document</title>
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	</head>
	<body>
		<style type="text/css">
			body {
				background: url(<?=$bgc?>) no-repeat;
				background-size: cover;
				height: 100%;
			}
			div {
				text-align: center;
				margin-top: 33vh;
			}

			h1 {
				margin: 0;
				font-family: 'Indie Flower', cursive;
				font-size: 4rem;
				color: white;
			}
		</style>

		<div>
			<h1><?=$text?></h1>
			<h1>Het is nu <?=$d?></h1>
		</div>
	</body>
</html>