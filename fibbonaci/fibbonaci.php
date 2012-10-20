<?php

/**
 * write function to return the nth fibbonaci number.
 * e.g. F(n) = F(n-1) + F(n-2), F(0) = 0, F(1) = 1
 * 0,1,1,2,3,5,8,13,21,34,55, ...
 * so myFibb(6) should return 8
 */


function findFibb($n) {
	if ($n === 0 || $n === 1) {
		return $n;
	}
	else {
		return findFibb($n-1) + findFibb($n-2);
	}
}

foreach(range(0,10) as $nth) {
	echo "f(${nth}) equals ". findFibb($nth) . "\n";
}

// memonize with static calls or closure?