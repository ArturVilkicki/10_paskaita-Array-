<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			background-color: orange;
		}
		.pix {
			width: 50px;
			height: 50px;
			border: 1px solid gray;
			float: left;
		}
		.j {
			background-color: black;
		}
		.b {
			background-color: white;
		}
		.G {
			background-color: yellow;
		}
		.Z {
			background-color: green;
		}
		.R {
			background-color: red;
		}
		.br {
			clear: both;
		}
	</style>
</head>
<body>

</body>
</html>

<?php
$img = ["j", "b","b","b","b","j","b","b","b","b","j","b","j","b","b","j"];

$h=1;
foreach ($img as $pixel) {
	echo '<div class="pix '. $pixel . '">'.$pixel.'</div>';
	if ($h ==4) {
		$h = 1;
		echo '<div class = "br"></div>';
	} else {
		$h++;
	}
}


?>
<?php
$lietuviskaVeliava = ["G","G","G","G","G","G","Z","Z","Z","Z","Z","Z","R","R","R","R","R","R",];

$h=1;
foreach ($lietuviskaVeliava as $pixel2) {
	echo '<div class="pix '. $pixel2 . '"></div>';
	if ($h ==6) {
		$h=1;
		echo '<div class = "br"></div>';
	} else {
		$h++;
	}
}
?>