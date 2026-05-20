<?php

Print "\n1: While\n";

$num1 = 1;

while ($num1 != 11){

print $num1 . "\n";

$num1 = $num1 + 1;
}

Print "\n2: Do - While\n";

$num1 = 1;

do { 

	echo $num1 . "\n";

	$num1 = $num1 + 1;
	
} while($num1 !=11);

Print "\n3: For\n";

for($num1=1; $num1!=11;$num1++) {
	print $num1 . "\n";

}
