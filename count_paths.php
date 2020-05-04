<?php

/**
* Function to count no. of paths from top left vertex to bottom right vertex
* Excluding diagonal paths
*/
function countPaths(int $i, int $j, int $x, int $y): int
{
	# code...
	if ($x == $i || $y == $j){
		return 1;
	}

	return (int)countPaths($i, $j, $x - 1, $y) + (int)countPaths($i, $j, $x, $y - 1);

}

print("Enter the source x co-ordinate".PHP_EOL);
$i = (int)readline();
print("Enter the source y co-ordinate".PHP_EOL);
$j = (int)readline();
printf("Source co-ordinate is (%d, %d)".PHP_EOL, $i, $j);


print("Enter the destination x co-ordinate".PHP_EOL);
$x = (int)readline();
print("Enter the destination y co-ordinate".PHP_EOL);
$y = (int)readline();
printf("Destination co-ordinate is (%d, %d)".PHP_EOL, $x, $y);

$noOfPaths = countPaths($i, $j, $x, $y);

printf("No of possible paths are: ");
print($noOfPaths);