<?php
$pattern = '#c[aou\d]t#';
$subjectOfNum = 'c1t';
$subjectOfa = 'cat';
$subjectOfo = 'cot';
$subjectOfu = 'cut';
$subjectOfi = 'cit';

preg_match_all($pattern, $subjectOfNum, $matchesOfNum);
var_dump($matchesOfNum);
echo '<hr/>';

preg_match_all($pattern, $subjectOfa, $matchesOfa);
var_dump($matchesOfa);
echo '<hr/>';

preg_match_all($pattern, $subjectOfo, $matchesOfo);
var_dump($matchesOfo);
echo '<hr/>';

preg_match_all($pattern, $subjectOfu, $matchesOfu);
var_dump($matchesOfu);
echo '<hr/>';

preg_match_all($pattern, $subjectOfi, $matchesOfi);
var_dump($matchesOfi);
echo '<hr/>';

die;