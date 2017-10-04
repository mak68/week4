<?php

$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '<br>';

echo "Compare date and tar: "; 

if ($date < $tar) {
	echo "the future";
} else if ($date >  $tar) {
	echo "the past";
} else  {
	echo "Oops";
}

echo '<br>';
echo "search for / in \$date: "; 
$find= strpos($date, '/' !==false);
echo $date;

echo '<br>';
echo "delimit postions with space";
$explode= explode('/', $date);
foreach ($explode as $i) {
	echo $i . " ";
	}

echo '<br> The number of words in $date is: ' . str_word_count ($date) . "<br>";

echo "The lenght of \$date is: "  .strlen ($date) . "<br>";

echo "The ASCII value of first character is: " . ord($date) . "<br>";

echo "The last two characters are: " . substr($date, 8). "<br>";

echo '<br>';
$explode= explode ('/', $date);
foreach ($explode as $i) {
	echo $i . " ";
	}

echo "<br>";

echo "Values in \$year that are leap years: ";
   foreach ($year as $value) {
	if (((int) $value % 4 == O && (int)$value % 100 !=0) || ((int)$value
	%400 == 0)) {
		echo "true\n";
	} else {
		echo "false\n";
		}
}
?>
