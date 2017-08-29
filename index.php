<!DOCTYPE html>
<html>
<head>
	<title>10 paskaita Array</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$automobiliai = [["Modelis" => "BMW", "Marke" => "5 klases", "Pagaminimo metai" => "2010", "Spalva" => "Raudona"],["Modelis" => "Ford", "Marke" => "Fiesta", "Pagaminimo metai" => "1997", "Spalva" => "Juoda"],["Modelis" => "Opel", "Marke" => "Astra", "Pagaminimo metai" => "2005", "Spalva" => "Melyna"]];

$phones = [["Gamintojas" => "Apple", "Modelis" => "5s", "Kiek metu" => "3"],
           ["Gamintojas" => "Nokia", "Modelis" => "3310", "Kiek metu" => "1"],
           ["Gamintojas" => "Samsung", "Modelis" => "GalaxyS5", "Kiek metu" => "3"]];
print_r($automobiliai);


?>
<table class="table">
	<thead>
		<tr>
			<th colspan="4" class="lentele">Automobiliai</th>
		</tr>
		<tr>
			<th>Modelis</th>
			<th>Marke</th>
			<th>Pagaminimo metai</th>
			<th>Spalva</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($automobiliai as $automobilis) {
	echo "<tr>
	<td>" . $automobilis['Modelis'] . "</td>
	<td>" . $automobilis['Marke'] . "</td>
	<td>" . $automobilis['Pagaminimo metai'] . "</td>
	<td>" . $automobilis['Spalva'] . "</td>
	</tr>";
}
	?>
	</tbody>
</table>

<table class="table">
	<thead>
		<tr>
			<th colspan="3" class="lentele">Telefonai</th>
		</tr>
		<tr>
			<th>Gamintojas</th>
			<th>Modelis</th>
			<th>Kiek metu</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($phones as $phone) {
	echo "<tr>
	<td>" . $phone['Gamintojas'] . "</td>
	<td>" . $phone['Modelis'] . "</td>
	<td>" . $phone['Kiek metu'] . "</td>
	</tr>";
	}
	?>
	</tbody>
</table>



</body>
</html>