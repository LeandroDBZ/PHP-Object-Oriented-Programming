<?php 
require_once 'a.php';
require_once 'b.php';
use Application\Form as Form;
use Application\Field as Field;
var_dump(new Form); //object(Application\Form)
print '<br>'.PHP_EOL;
var_dump(new Field); //object(Application\Field)
print '<br>'.PHP_EOL;
use Components\Form as ComponentForm;
var_dump(new ComponentForm); //object(Components\Form)
print '<br>'.PHP_EOL;
var_dump(new Application\Form);
print '<br>'.PHP_EOL;
var_dump(new Components\Form);