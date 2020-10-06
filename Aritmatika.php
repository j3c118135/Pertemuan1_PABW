<form action="Aritmatika.php" method="get">
	<input type="number" name="bil1" 
	<?php
	if(isset($_GET["bil1"]))
		echo 'value="'.$_GET['bil1'].'"';
	?>>
	<select name="opr">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="x">x</option>
		<option value="/">/</option>
	</select>
	<input type="number" name="bil2"
	<?php
	if(isset($_GET["bil2"]))
		echo 'value="'.$_GET['bil2'].'"';
	?>>
	<input type="submit" value="=" name="hasil">
	<?php 
	if(isset($_GET['hasil']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])){
		switch($_GET['opr']){
			case "+":
			$hsl = $_GET['bil1'] + $_GET['bil2'];
			break;
			
			case "-":
			$hsl = $_GET['bil1'] - $_GET['bil2'];
			break;
			
			case "x":
			$hsl = $_GET['bil1'] * $_GET['bil2'];
			break;
			
			case "/":
			$hsl = $_GET['bil1'] / $_GET['bil2'];
			break;
		}
		
		echo $hsl;
		$his = $_GET['history'].$_GET['bil1']." ".$_GET['opr']." ".$_GET['bil2']." = ".$hsl."<br>";
	}
	?>
	<input type="hidden" name="history"
		<?php 
			if(isset($_GET['hasil']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
				echo 'value="'.$his.'"';
			else
				echo 'value=""'?>>
	<h2>History</h2>
	<i
	<?php 
		if(isset($_GET['hasil']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
		echo $his; ?>
</form>

