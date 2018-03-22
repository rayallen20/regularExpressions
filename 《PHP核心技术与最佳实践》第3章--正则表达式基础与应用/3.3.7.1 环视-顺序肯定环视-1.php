<?php
$pattern = "#\b\w+(?=ing\b)#";
$subject = "I'm singing while you’re dancing.";
preg_match_all($pattern, $subject, $matches);
var_dump($matches);
die;