<?php

$cities = ['paris', 'patna', 'ajmer', 'almora', 'nainital'];

$dict = [];

foreach ($cities as $key => $city){
	$char = substr($city, 0, 1);
	if (empty($dict[$char])){
		$dict[$char] = [];
	}
	array_push($dict[$char], $city);	
	
}

print_r($dict);