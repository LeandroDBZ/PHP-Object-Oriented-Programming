<?php
require_once 'a.php';
use Application\Form;
var_dump(new Form); //object(Application\Form)
print '<br>'.PHP_EOL;
var_dump(new Field); //Fatal Error: Class 'Field'