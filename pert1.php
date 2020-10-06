<?php
//data resources -> dari sumber daya lain
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
 echo "$value <br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
 echo "$x = $val<br>";
} 

echo $age["Joe"];
echo "<br><br>";
for ($x = 0; $x < 10; $x++) {
 if ($x == 4) {
 break;
 }
 echo "The number is: $x <br>";
} 
echo "<br><br>";
$x = 0;
while($x < 10) {
 if ($x == 4) { 
	$x++;
	continue;
 }
 echo "The number is: $x <br>";
 $x++;
} 

?> 