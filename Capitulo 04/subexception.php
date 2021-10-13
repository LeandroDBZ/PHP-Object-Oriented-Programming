<?php
require_once 'classes/CSVParser.php';

$csv = new CSVParser('clientes.csv', ';');
try {
    $csv->parse();
    while($row = $csv->fetch()){
        print $row['Cliente']."-";
        print $row['Cidade']."<br>\n";
    }
} catch (Exception $ex) {
    print_r($ex->getTrace());
    die("Arquivo não encontrado");
}catch (Exception $ex){
    echo $ex->getFile(). ':'.$ex->getLine().'#'.$ex->getMessage();
}