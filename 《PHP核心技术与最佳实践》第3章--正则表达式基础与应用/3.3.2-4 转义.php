<?php
$pattern = '#[aby}\\]#';
$subject = 'a\bc[]{}';
preg_match_all($pattern, $subject, $matches);
var_dump($matches);
die;