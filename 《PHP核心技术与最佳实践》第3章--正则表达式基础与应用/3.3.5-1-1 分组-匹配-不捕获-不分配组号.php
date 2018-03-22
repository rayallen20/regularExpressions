<?php
$patternOfSelfName = '#(?:(?:2[0-4]\d|25[0-5]|[01]?\d?\d)\.){3}(?:2[0-4]\d|25[0-5]|[01]?\d?\d)#';
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