<?php

$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '<br>';

if ($date > $tar) {
echo "the future";
} else if ($date < $tar) {
echo "the past";
} else if ($date==$tar) {
echo "Oops";
}
echo '<br>';
$find= strpos($date, '/' !==false);
echo $date;

echo '<br>';
$explode= explode('/', $date);
foreach ($explode as $i) {
	echo $i . " ";
	}

echo '<br> The number of words in $date is: ' . str_word_count ($date);

echo '<br>' .strlen ($date);




?>
