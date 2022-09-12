<?php
/*
There are three types of array.
Indexed Array : An array with a numeric index.
Associative Array : An array where each key is associated with a value.
Nesting Array(Multi-D array) : An array containing one or more array.
*/

$arr = array(10, 20, 30, 40, 50);

$col = array("red", "green", "blue", "black");

// /echo $arr[0]."<br/>";

//echo $col[0];

//Find the sum of given array

//$sum = 0;
$arr = array(10, 11, 12, 13, 14, 15);
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] % 2 == 0) {
		@$even = $even + $arr[$i];
	} else {
		@$odd = $odd + $arr[$i];
	}
}
echo "Even of array is=  " . $even . "<br/>";
echo "Odd of array is=  " . $odd;
echo "<br/>";
echo "<br/>";
echo "<br/>";

//====================Associative Array=========================
$state = array("Dl" => "Delhi", "Hr" => "Haryana", "Pn" => "Punjab", "Br" => "Bihar");

foreach ($state as  $key => $val) {
	echo $key . " " . "=" . $val . "<br/>";
}

//================Nested Array==================================

$arr = array(
	array(10, 10, 10),
	array(10, 10, 10),
	array(10, 10, 10)
);

$s = 0;
$s1 = 0;

foreach ($arr as $k) {
	foreach ($k as $v) {
		echo $v;
		$s1 = $s1 + $v;
	}
	echo "<br/>";
}
echo "sum of Array is: " . $s1;


error_reporting(1);
$arr = array(
	array("name" => "neeraj", "mob" => 342353534),
	array("name" => "rohit", "mob" => 34235),
	array("name" => "sa", "mob" => 34235),
	array("name" => "deepak", "mob" => 33534)
);
echo '<table border="2">';
echo '<tr>';
echo '<td align="center">Name:</td>';
echo '<td align="center">Moblie:</td>';

foreach ($arr as $k) {
	echo '<tr>';
	foreach ($k as $v) {
		echo '<td align="center">' . $v . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>

<script>
	var x = 21;
	if (x % 2 == 0) {
		document.write("x is even number");
	} else {
		document.write("x is odd number");
	}
</script>