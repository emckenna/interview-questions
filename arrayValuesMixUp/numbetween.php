<?php

// return a number >= 0, and between x and y.
function numBetween($x,$y) {
	if ($x < 0 || $y < 0 || $x > $y) {
	//if(true);
		exit("conditions: x >= 0 OR y >= 0 OR x <= y\n");
	}

	if ($x == $y)
		return $x;


	return rand($x,$y);
}