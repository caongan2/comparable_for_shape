<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('CircleOne', 6);
$circleTwo = new ComparableCircle('CircleTwo', 2);
$circlThree = new ComparableCircle('CircleThree', 7);

$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;
