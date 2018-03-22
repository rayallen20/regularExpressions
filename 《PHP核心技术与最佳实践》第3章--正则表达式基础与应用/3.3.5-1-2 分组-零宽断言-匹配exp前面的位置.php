<?php
$pattern = "#.*(?=123){3}#";

$subject1 = 'DEA1231231234';
$subject2 = 'DEB123';
$subject3 = 'DE 123';
$subject4 = 'DE汉字123';
$subject5 = 'DE_123';
$subject6 = 'DE_124';

preg_match($pattern, $subject1,$matches1);
var_dump($matches1);
echo '<hr/>';

preg_match($pattern, $subject2,$matches2);
var_dump($matches2);
echo '<hr/>';

preg_match($pattern, $subject3,$matches3);
var_dump($matches3);
echo '<hr/>';

preg_match($pattern, $subject4,$matches4);
var_dump($matches4);
echo '<hr/>';

preg_match($pattern, $subject5,$matches5);
var_dump($matches5);
echo '<hr/>';

preg_match($pattern, $subject6,$matches6);
var_dump($matches6);
echo '<hr/>';

die;