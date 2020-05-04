<?php

$cities = ['paris', 'patna', 'ajmer', 'almora', 'nainital'];

// Using array to create a dictionary as it can hold key value pairs
$dict = [];

foreach ($cities as $key => $city){
	$char = substr($city, 0, 1);
	if (empty($dict[$char])){
		$dict[$char] = [];
	}
	array_push($dict[$char], $city);	
	
}

print_r($dict);