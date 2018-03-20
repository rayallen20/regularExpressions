<?php
$pattern = '#\S+#';
$subjectSpace = '  ';
$subjectNotSpace = 'aaa';

preg_match_all($pattern, $subjectSpace, $matchesOfSpace);
var_dump($matchesOfSpace);
echo '<hr/>';

preg_match_all($pattern, $subjectNotSpace, $matchesOfNotSpace);
var_dump($matchesOfNotSpace);
echo '<hr/>';
die;