<?php 

//"Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”."

$i = 1;
while($i <= 100) {
	if ($i % 3 == 0 && $i % 5 == 0 ) {
		echo "FizzBuzz";
	} elseif ($i % 3 == 0) {
		echo "Fizz";
	} elseif ( $i % 5 == 0 ) {
		echo "Buzz";
	} else {
		echo $i;
	}
	$i++;
}



