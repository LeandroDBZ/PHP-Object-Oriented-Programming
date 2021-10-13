<?php
//interpreta o ducumento XML
$xml = simplexml_load_file('paises.xml');
//exibe as informações do objeto criado
var_dump($xml);