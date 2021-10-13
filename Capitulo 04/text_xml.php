<?php
//interpreta o ducumento XML
$xml = simplexml_load_file('paises2.xml');
//exibe as informações do objeto criado
foreach ($xml->children() as $elemento => $valor) {
    echo "$elemento: $valor<br>\n";
}