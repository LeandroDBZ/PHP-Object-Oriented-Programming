<?php
//interpreta o documento XML
$xml = simplexml_load_file('paises2.xml');
//altera as propriedades
$xml->moeda='Novo Real (NR$)';
$xml->geografia->clima = 'temperado';
//adiciona novo nodo
$xml->addChild('presidente', 'Chapoin Colorado');
//exibindo o novo XML
echo $xml->asXML();
//grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());