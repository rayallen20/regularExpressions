<?php
$pattern = '#\d\d?#';

$subjectNum1 = '12';
$subjectNum2 = '1';

preg_match_all($pattern, $subjectNum1, $matches1);
preg_match_all($pattern, $subjectNum2, $matches2);

var_dump($matches1);
var_dump($matches2);

echo '<hr/>';
echo '<hr/>';
echo '<hr/>';

// IP地址的正则测试猜想验证

/*
 * 这是书上的正则
 * */
$patternOfBook = '#((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)#';
$IP1 = '192.168.0.1';
$IP2 = '192.168.0.01';
$IP3 = '192.168.0.001';
$IP4 = '192.168.0.101';

preg_match_all($patternOfBook, $IP1, $matchesIP1);
var_dump($matchesIP1);
echo '<hr/>';

preg_match_all($patternOfBook, $IP2, $matchesIP2);
var_dump($matchesIP2);
echo '<hr/>';

preg_match_all($patternOfBook, $IP3, $matchesIP3);
var_dump($matchesIP3);
echo '<hr/>';

preg_match_all($patternOfBook, $IP4, $matchesIP4);
var_dump($matchesIP4);

echo '<hr/>';
echo '<hr/>';
echo '<hr/>';

/*
 * 这是我自己写的的正则
 * */
$patternOfMyself = '#((2[0-4]\d|25[0-5]|[01]?\d?\d)\.){3}(2[0-4]\d|25[0-5]|[01]?\d?\d)#';
$IP1 = '192.168.0.1';
$IP2 = '192.168.0.01';
$IP3 = '192.168.0.001';
$IP4 = '192.168.0.101';

preg_match_all($patternOfMyself, $IP1, $matchesIP1);
var_dump($matchesIP1);
echo '<hr/>';

preg_match_all($patternOfMyself, $IP2, $matchesIP2);
var_dump($matchesIP2);
echo '<hr/>';

preg_match_all($patternOfMyself, $IP3, $matchesIP3);
var_dump($matchesIP3);
echo '<hr/>';

preg_match_all($patternOfMyself, $IP4, $matchesIP4);
var_dump($matchesIP4);

echo '<hr/>';
echo '<hr/>';
echo '<hr/>';

/*
 * 自命名组号实验
 * */

$patternOfSelfName = '#(?<GROUP1>(?<GROUP2>2[0-4]\d|25[0-5]|[01]?\d?\d)\.){3}(?<GROUP3>2[0-4]\d|25[0-5]|[01]?\d?\d)#';
$IP1 = '192.168.0.1';
$IP2 = '192.168.0.01';
$IP3 = '192.168.0.001';
$IP4 = '192.168.0.101';

preg_match($patternOfSelfName, $IP1, $matchesIP1);
var_dump($matchesIP1);
echo '<hr/>';

preg_match($patternOfSelfName, $IP2, $matchesIP2);
var_dump($matchesIP2);
echo '<hr/>';

preg_match($patternOfSelfName, $IP3, $matchesIP3);
var_dump($matchesIP3);
echo '<hr/>';

preg_match($patternOfSelfName, $IP4, $matchesIP4);
var_dump($matchesIP4);

die;