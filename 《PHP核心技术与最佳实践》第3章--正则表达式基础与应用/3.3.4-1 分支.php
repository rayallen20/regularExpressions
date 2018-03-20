<?php
$subjectC = 'cat';
$subjectH = 'hat';
$subjectF = 'fat';
$subjectTO = 'toat';

$pattern = '#(c|h|f|to)at#';

preg_match_all($pattern, $subjectC,$matchesC);
var_dump($matchesC);
echo '<hr/>';

preg_match_all($pattern, $subjectH,$matchesH);
var_dump($matchesH);
echo '<hr/>';

preg_match_all($pattern, $subjectF,$matchesF);
var_dump($matchesF);
echo '<hr/>';

preg_match_all($pattern, $subjectTO,$matchesTO);
var_dump($matchesTO);
echo '<hr/>';
echo '<hr/>';
echo '<hr/>';

$patternCancel = '#(?:c|h|f|to)at#';

preg_match_all($patternCancel, $subjectC,$matchesCCancel);
var_dump($matchesCCancel);
echo '<hr/>';

preg_match_all($patternCancel, $subjectH,$matchesHCancel);
var_dump($matchesHCancel);
echo '<hr/>';

preg_match_all($patternCancel, $subjectF,$matchesFCancel);
var_dump($matchesFCancel);
echo '<hr/>';

preg_match_all($patternCancel, $subjectTO,$matchesTOCancel);
var_dump($matchesTOCancel);
echo '<hr/>';