<?php
require_once 'classes/Preferencias.php';

$p1 = Preferencias::getInstance();
print 'A linguagem é: '.$p1->getData('language')."<br>\n";

$p1->setData('language', 'pt');
print 'A linguagem é: '.$p1->getData('language')."<br>\n";

$p2 = Preferencias::getInstance();
print 'A linguagem é: '.$p2->getData('language')."<br>\n";

$p1->save();