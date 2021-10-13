<?php
require_once 'classes/tdg/PrdutoGateway.php';
$data = new stdClass;
$data->descricao = 'Vinho Brasileiro Tinto Merlot';
$data->estoque = 8;
$data->preco_custo = 12;
$data->preco_venda = 18;
$data->codigo_barras = '1352356987875621';
$data->data_cadastro = date('Y-m-d');
$data->origem = 'N';
try{
    $user = 'root';
    $pass = '';
    $conn = new PDO('mysql:host=localhost;dbname=estoque', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ProdutoGateway::setConnection($conn);
    $gw = new ProdutoGateway;
    $gw->save($data);
    $produto = $gw->find(1);
    $produto->estoque += 2;
    $gw->save($produto);
    foreach($gw->all('estoque<=10') as $produto){
        print $produto->descricao."<br>\n";
    }
}catch(Exception $e){
    print $e->getMessage();
}