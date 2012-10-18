<?php
include_once 'numbetween.php';

/**
 * create a function to take the given array and mix up all the values in array.
 * a random function will be provided. e.g. int numBetween(x,y)
 */

function mixup($arr) {
	$length = count($arr) - 1;
	foreach($arr as $key => $value) {
		$switch_with = numBetween(1,$length);
		$temp = $arr[$switch_with];
		$arr[$switch_with] = $arr[$key];
		$arr[$key] = $temp;
	}
	return $arr;
}

// initial array
$given = array(1,2,3,4,5,6,7,8,9,10);

print_r($given);

print_r(mixup($given));
