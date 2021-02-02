<?php

$array = [
	'1' => 'a',
	'2' => 'b',
	'3' => 'c',
	'4' => 'd'
];

function implode_all_combinations($array, $glue = '') {
	if(count($array) <= 1) return $array;
	
	$combs = [];

	foreach($array as $key => $value) {
		$arr2 = $array;
		unset($arr2[$key]);
		foreach(implode_all_combinations($arr2, $glue) as $comb) {
			$combs[] = $value . $glue . $comb;
		}
	}
	return $combs;
} 

print_r(implode_all_combinations($array));