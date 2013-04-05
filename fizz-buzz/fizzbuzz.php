<?php
/**
 * http://c2.com/cgi/wiki?FizzBuzzTest
 * "Write a program that prints the numbers from 1 to 100.
 * But for multiples of three print “Fizz” instead of the number.
 * For the multiples of five print “Buzz”.
 * For numbers which are multiples of both three and five print “FizzBuzz”."
 *
 */

echo "FIZZ-BUZZ". PHP_EOL;
echo "=====================". PHP_EOL;
for ($i = 1; $i <= 100; $i++ )
{
	$out = "";

	if (multiple_of_three($i)) {
		$out .= "Fizz";
	}
	if (multiple_of_five($i)) {
		$out .= "Buzz";
	}

	if(empty($out)){
		$out = $i;
	}

	echo $out . PHP_EOL;
}

echo PHP_EOL;
exit();


function multiple_of_five($num) {
	return $num % 5 === 0;
}

function multiple_of_three($num) {
	return $num % 3 === 0;
}
