<html>
<head>
<title>Hello World</title>
</head>
<body>
<?php

class Calculator {
function sum($x, $y) {
	return $x + $y;
}
function subtract($x, $y) {
	return $x - $y;
}

function multiply($x, $y) {
	return $x * $y;
}

function divide($x, $y) {
	return $x / $y;
}
}
$calculator = new Calculator();
$op = $_GET["op"];
$y = $_GET["y"];
$x = $_GET["x"];
if ($op=="sum") {
    // sum case
    echo "$x + $y = " . $calculator->sum($x, $y);
}
if ($op=="subtract") {
    // subtract case
    echo "$x - $y = " . $calculator->subtract($x, $y);
}

if ($op=="multiply") {
    // subtract case
    echo "$x * $y = " . $calculator->multiply($x, $y);
}
else {
    echo "$x / $y = " . $calculator->divide($x, $y);
}

?>
</body>
</html>