


<!DOCTYPE html>
<html>
<head>
	<title>Uzduotis</title>
</head>
<body>
<?php
$troskinio_sudetis = ["Jautiena" => 250, "Pupeles" => 500,"Vanduo" => 500,"Pomidorai" => 300, "Paprika" => 100];
print_r($troskinio_sudetis);
$suma =0;
foreach ($troskinio_sudetis as $ingredientas => $kiekis) {
	echo $ingredientas . ":" . $kiekis . "<br />";
	$suma = $suma + $kiekis;
}

echo "<table>";
$suma =0;
foreach ($troskinio_sudetis as $ingredientas => $kiekis) {
	echo '<tr>' . '<td>' . $ingredientas . '</td>' . '<td>'  .$kiekis . '</td>' . "</tr>"; 
	$suma = $suma + $kiekis;
}

echo '<tr>' . '<td>' . 'Suma:' . '</td>' . '<td>' . $suma . '</td> . </tr>';
echo "</table>";

function checkWater($troskinio_sudetis){
	if (isset($troskinio_sudetis['Vanduo']) && isset($troskinio_sudetis['Pupeles'])) {
		
		if ($troskinio_sudetis['Vanduo'] > $troskinio_sudetis['Pupeles']) {
		echo "Vandens yra daugiau negu pupeliu";
		} else {
		echo "Vandens nepakanka <br>";
		echo "Vandens: " . $troskinio_sudetis["Vanduo"] . "<br>";
		echo "Pupeliu: " . $troskinio_sudetis["Pupeles"] . "<br>";
		}

	} else {
		echo "Recepte vandens arba pupeliu nera";
	}
	
}
$kugelis = [];
checkWater($troskinio_sudetis);
checkWater($kugelis);
?>


</body>
</html>