<?php
//interpreta o ducumento XML
$xml = simplexml_load_file('paises2.xml');
//exibe as informações do objeto criado
echo 'Nome: '.$xml->nome."<br>\n";
echo 'Idioma: '.$xml->idioma."<br>\n";
echo "<br>\n";
echo "**Informações Geográficas**<br>\n";
echo 'Clima: '.$xml->geografia->clima."<br>\n";
echo 'Costa: '.$xml->geografia->costa."<br>\n";
echo 'Pico: '.$xml->geografia->pico."<br>\n";