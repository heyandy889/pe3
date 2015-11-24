Largest prime factor
<br>
Problem 3
<br>
The prime factors of 13195 are 5, 7, 13 and 29.
<br>
What is the largest prime factor of the number 600851475143 ?
<br>
<br>
<br>
<br>

<?php
$error_reporting = E_ALL | E_STRICT;
ini_set('display_errors', True);

function isPrime($target){
	for($i=2; $i < sqrt($target); $i += 1){
		$remainder = $target % $i;
		if($remainder == 0){
			return False;
		}
	}
	return True;
}




echo("Is it prime?");
echo("<br>");
for($i=2; $i<sqrt(600851475143); $i++){
//for($i=2; $i<sqrt(6008); $i++){

	if(isPrime($i)){
		print($i . ",<br>");
	}
}

?>
















