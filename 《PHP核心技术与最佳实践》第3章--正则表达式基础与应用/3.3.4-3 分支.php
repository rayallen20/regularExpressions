<?php
$patternOfMySelf = '#\d{5}|\d{5}-\d{4}#';

$subjectOfOnlyFiveNum = '12345';
$subjectOfFullNum = '12345-1234';

preg_match_all($patternOfMySelf, $subjectOfOnlyFiveNum, $matchesOfOnlyFiveNum);
var_dump($matchesOfOnlyFiveNum);
echo '<hr/>';

preg_match_all($patternOfMySelf, $subjectOfFullNum, $matchesOfFullNum);
var_dump($matchesOfFullNum);
echo '<hr/>';
echo '<hr/>';
echo '<hr/>';

$patternTrue = '#\d{5}-\d{4}|\d{5}#';
preg_match_all($patternTrue, $subjectOfOnlyFiveNum, $matchesOfOnlyFiveNumTrue);
var_dump($matchesOfOnlyFiveNumTrue);
echo '<hr/>';

preg_match_all($patternTrue, $subjectOfFullNum, $matchesOfFullNumTrue);
var_dump($matchesOfFullNumTrue);
echo '<hr/>';

die;
