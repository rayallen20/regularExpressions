<?php
$pattern = '#0(\d{2}-\d{8}|\d{3}-\d{7})#';

$subjectOfDirectControlled = '010-12345678';
$subjectOfGeneralCity = '0417-1234567';

preg_match_all($pattern, $subjectOfDirectControlled,$matchesOfDirectControlled);
var_dump($matchesOfDirectControlled);
echo '<hr/>';

preg_match_all($pattern, $subjectOfGeneralCity,$matchesOfGeneralCity);
var_dump($matchesOfGeneralCity);
echo '<hr/>';
die;