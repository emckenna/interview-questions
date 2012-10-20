<?php
/**
 * http://en.wikipedia.org/wiki/Pascal%27s_triangle
 *
 * write function to return nth row of pascals triangle.
 */


/**
 * return nth row of pasclas triangle
 * @param  int $n row
 * @return array    array of ints that are the $n th row of a pascals triangle.
 */
function ptRow($n) {
	// make this static so we dont have to recalculate for each call.
	// sort out re-using and adding a row when depth is exceeded.
	$pt = buildTriangle($n);
	return $pt[$n];
}


function buildTriangle($depth) {
	$pt = array();

	for($pt_row = 0; $pt_row <= $depth; $pt_row++) {
		if ($pt_row === 0) { 
			$pt[$pt_row] = array(1);
		}
		else {
			$pt[$pt_row] = new_pt_row($pt[$pt_row-1]);
		}
	}

	return $pt;
}

function new_pt_row($row_before) {
	$length = count($row_before);
	$new_row = array();
	for ($i=0; $i <= $length; $i++) {
		$new_row[$i] = calc_pt_value($i, $row_before);
	}
	return $new_row;
}

function calc_pt_value($index, $row) {
	if ($index < 0) {
		return $row[$index];
	}
	else {
		return $row[$index-1] + $row[$index];
	}
}

// ================== OUTPUT ==================
// 

//print_r(buildTriangle(7));

foreach(range(0,9) as $n) {
	print("$n = ". implode(", ", ptRow($n)) . "\n");
}

