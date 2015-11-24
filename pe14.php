
<style>
body{
	font-family:sans-serif;
}
</style>


<?php

ini_set("display_errors", TRUE);



function nextCollatz($current){

	$next = -1; 

	if($current % 2 == 0){
		$next = $current / 2;
	}
	else{
		$next = 3 * $current + 1;
	}

	return $next;
}


echo("<a href='https://projecteuler.net/problem=14'>Project Euler - Problem 14</a>");
echo("<br>");
echo("<br>");





function collatz($seed){
	$length = 0;

	echo("seed: " . $seed);
	echo("<br>");
	$next = nextCollatz($seed);
	while($next != 1){
		echo($next);
		echo("<br>");
		$next = nextCollatz($next);
		$length += 1;
	}

	echo("Sequence beginning with " . $seed . " has " . $length . " elements.");
}

collatz(16);



?>

