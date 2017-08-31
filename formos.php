<!DOCTYPE html>
<html>
<head>
	<title>Formos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Formos</h1>
	<div class="row">
		<div class="col">
			<form method="POST">
				<input type="text" name="arg1">
				<input type="text" name="arg2">
				<select name="operation">
					<option value="sum">Sudetis</option>
					<option value="ded">Atimtis</option>
					<option value="mult">Daugyba</option>
					<option value="div">Dalyba</option>
				</select>
				<button>GO!</button>
			</form>
		</div>
		<div class="col">
			<pre>
				<?php print_r($_POST); ?>
			</pre>

			

			Rezultatas: <br/>
			<?php
			if (isset($_POST['arg1']) && isset($_POST['arg2'])) {
				if ($_POST ['operation'] == "sum") {
					echo $_POST['arg1'] + $_POST['arg2'];
				} elseif ($_POST ['operation'] == "ded") {
					echo $_POST['arg1'] - $_POST['arg2'];
				} elseif ($_POST ['operation'] == "mult") {
					for ($eil=1; $eil <= $_POST['arg1'] ; $eil++) { 
						for ($zenklai=1; $zenklai <= $_POST['arg2']  ; $zenklai++) { 
							echo "#";
						}
						echo "<br>";
					}
					echo $_POST['arg1'] * $_POST['arg2'];
				} elseif ($_POST ['operation'] == "div") {
					if ($_POST['arg2']==0) {
						echo '<div class="alert alert-success">Dalyba is nulio negalima</div>';
					} else {
						echo $_POST['arg1'] / $_POST['arg2'];
					}
									
				}
				
				/*switch ($_POST ['operation']) {
					case 'sum':
						echo $_POST['arg1'] + $_POST['arg2'];
						break;
					case 'ded':
						echo $_POST['arg1'] - $_POST['arg2'];
						break;
					case 'mult':
						echo $_POST['arg1'] * $_POST['arg2'];
						break;
					case 'div':
						echo $_POST['arg1'] / $_POST['arg2'];
						break;
					
				}
				*/
				//echo $_POST['arg1'] + $_POST['arg2'];
				//atliekam aritmetini veiksma, priklausomai nuo $_POST operation
			} else {
				echo "Nera argumentu";
			}	
				//echo $_GET['pavarde'];
			?>
		</div>
	</div>
</div>
</body>
</html>