<?php
//$a = rand (1,6);
//$b = rand(1,6);


//echo $a . "<br>";
//echo $b . "<br>";


//if ($a == 6 && $b== 6) {
	//echo "Bingo!";
//}

//if ($a ==3 || $b ==3) {
	//echo "Isridentas skaicius 3";
//}


function go() {
	$game = [rand (1,6),rand (1,6)];
	return $game;
}
function check($game_array) {
	$result = "";

	if ($game_array[0] ==6 && $game_array[1] ==6) {
		$result = "Bingo!";
	}
	if ($game_array[0] == $game_array[1]) {
		$result = $result ." Vienodi kauliukai";
	}
	if ($game_array[0]<3 || $game_array[1]<3) {
		$result = $result . "Pralosiai";
	}
	if ($game_array[0]%2 ==0 || $game_array[1]%2==0) {
		$result = $result . "Lyginis";
	}

	return $result;
}
//$a = go();
//print_r($a);
//arba
//print_r(go());

echo "<table>";
echo "<tr>
		<td>Zaidimas</td>
		<td>Kauliukas A</td>
		<td>Kauliukas B</td>
		<td>Suma</td>
		<td>Rezultatas</td>
	 </tr>";

for ($eilutes=1; $eilutes <= 20; $eilutes++) { 
	$game = go();
	echo "<tr><td>" .$eilutes . "</td><td>" .$game[0] . "</td><td>" . $game[1] . "</td><td>" . array_sum($game) . "</td><td>" . check($game) . "</td></tr>";
}
echo "</table>";
?>
