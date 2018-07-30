<?php
$ini = parse_ini_file('config.ini');

echo $ini['attributes'][0] . "\n";
echo $ini['attributes'][1] . "\n";
echo $ini['apple'] . "\n";

$test = parse_ini_file('config.ini', true);

echo $test['fruitCounter']['apple'] . "\n";
echo $ini['animals'] . "\n";

var_dump($test);

// $test = file($filePath, )
 ?>
