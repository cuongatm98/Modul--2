<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 3);
$circleTwo = new ComparableCircle('circleTwo', 5);
$circleThree = new ComparableCircle('circleThree', 5);

$test = $circleOne->compareTo($circleThree);
echo('Comparable : <br>');
echo $test;
