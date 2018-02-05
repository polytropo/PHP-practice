<h3><?php 
// SIngle line ocmponent
/* Blabla multi line
comment */
	echo "Hello world!<br>";
	$output = "blabla output<br>";
	$output2 = "hahaha";
	echo $output . $output2;
	echo $output;
	


?></h3>

<!DOCTYPE html>

<html>

<body>

<?php

$d=date("D");

if ($d=="Fri"){

 echo "Have a nice weekend!";

}else{

 echo "Have a nice day!";
}
$myName = "Primoz";

echo "<div id=middle> " . $myName . " is my name</div>";

$day = date("D");
if ($day == "Mon") {
	echo "Happy Monday2";
} else {
	echo "Have a nice day2!";
} 

 
$today2 = "Wed";
switch ($today2) {
	case "Mon":
		echo "Its2 Monday";
		break;
	case "Tue":
		echo "Its Tuesday";
		break;
	case "Wed":
		echo "Its Wednesday";
		break;
	case "Thu":
		echo "Its Thursday";
		break;
	default:
		echo "I dont know which day it is!";
		break;
}

for ($i = 0; $i <= 50; $i++) {
	echo "<h1>Anu * $i</h1><br>";
}
$i = 0;
while ($i <= 50) {
	echo "$i";
	$i++;
}
$x = 0;
do {
	echo "x$x";
	$x++;
} while ($x <= 50);
echo "<br>";
$array = array (1,2,3,4,5,6,7,8,9,10);
foreach ($array as $number) {
	echo $number . "<br>";
}

$assocArray = array ("Mickey" => "Mouse", "Super" => "Mario", "Goku" => "pokemon");
print_r($assocArray);
foreach ($assocArray as $key => $value) {
	echo $key . " is " . $value . "<br>";
}

$multiArray = array ("Family" => array("primoz", "anu", "matej"), "pets" => array("moksi", "willow", "toro"), "roommates" => array("Sara", "Natasha"));
print_r($multiArray);
echo "<br>" . $multiArray["Family"][1] . "<br>";
foreach($multiArray["Family"] as $value) {
	echo $value . "<br>";
}
?>

</body>

</html>