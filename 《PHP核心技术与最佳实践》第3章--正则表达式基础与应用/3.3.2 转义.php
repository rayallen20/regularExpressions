<?php
$pattern = '#\d+\Q.$.\E$#';
$subject = '1234.$.';
preg_match_all($pattern, $subject,$matches);
var_dump($matches);


$pattern2 = '#^1[13578]\d{9}$#';
$subject2 = '18410269837';
preg_match_all($pattern2, $subject2, $matches2);
var_dump($matches2);

preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches3);
var_dump($matches3);
die;