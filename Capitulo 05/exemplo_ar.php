<?php
require_once 'classes/ar/Produto.php';

try{
    $user = 'root';
    $pass = '';
    $conn = new PDO('mysql:host=localhost;dbname=estoque', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ProdutoGateway::setConnection($conn);
    $produtos = Produto::all();
    foreach($produtos as $produto){
        $produto->delete();
    }
    $produto = new Produto;
    $produto->descricao = 'Vinho Brasileiro Tinto Merlot';
    $produto->estoque = 8;
    $produto->preco_custo = 12;
    $produto->preco_venda = 18;
    $produto->codigo_barras = '1352356987875621';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();

    $outro = Produto::find(1);
    print 'Descrição: '.$outro->descricao."<br>\n";
    print 'Lucro: '.$outro->getMargemLucro()."%<br>\n";
    $outro->registraCompra(14,5);
    $outro->save();
}catch(Exception $e){
    print $e->getMessage();
}