<?php
$error_reporting = E_ALL | E_STRICT;
ini_set('display_errors', True);
ini_set('max_execution_time', 60*20);

include("primes.php");

echo("hello<br>");



//$target = 600851475143;
$target   = 600851475143;

echo("Factors of " . $target . "<br>");
for($i=1; $i<count($primes); $i++){
	if($target % $primes[$i] == 0){
		echo($primes[$i]);
		echo("<br>");
	}
}



?>
