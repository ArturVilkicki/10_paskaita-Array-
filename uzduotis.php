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
?>


</body>
</html>