<?php
$subject = "<a href='http://www.baidu.com'>百度</a>";

// 我的想法
$patternOfMyself = '#^<a.+#';
preg_match_all($patternOfMyself, $subject, $matchesOfMyself);
var_dump($matchesOfMyself);


// 书中答案
$patternOfBook = '#<a[^>]+>#';
preg_match_all($patternOfBook, $subject, $matchesOfBook);
var_dump($matchesOfBook);
die;