<?php
require_once 'veiculo.php';
$rc = new ReflectionClass('Automovel');
var_dump($rc->getMethods());
print "<br>".PHP_EOL;
print "<br>".PHP_EOL;
var_dump($rc->getProperties());
print "<br>".PHP_EOL;
print "<br>".PHP_EOL;
var_dump($rc->getParentClass());