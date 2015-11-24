
<style>
body{
	font-family:sans-serif;
}
</style>


<?php

ini_set("display_errors", TRUE);
ini_set('max_execution_time', 60*5);

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

function collatz($seed){
	$length = 1;
	$next = nextCollatz($seed);
	while($next > 1){
		$next = nextCollatz($next);
		$length += 1;
	}

	return $length + 1;
}




echo("<a href='https://projecteuler.net/problem=14'>Project Euler - Problem 14</a>");
echo("<br>");
echo("<br>");

$lengths = array();
$start = 77031;
for($i=$start; $i<1000000; $i++){
	$seed = $i;
	$lengths[] = collatz($seed);
}
$max = max($lengths);
echo("integer with longest sequence: " .  ($start + array_search($max, $lengths)));
echo("<br>");
echo("length of longest sequence: " .  $max);


?>

