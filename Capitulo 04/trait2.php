<?php

use Pessoa as GlobalPessoa;
use Produto as GlobalProduto;

require_once 'classes/Record.php';
trait ObjectConversionTrait{
    public function toXML(){
        $data = array_flip($this->data);
        $xml = new SimpleXMLElement('<'.get_class($this).'/>');
        array_walk_recursive($data, array($xml,'addChild'));
        return $xml->asXML();
    }
    public function toJSON(){
        return json_encode($this->data);
    }
}
class Pessoa extends Record{
    const TABLENAME = 'pessoas';
    use ObjectConversionTrait;
}

class Produto extends Record{
    use ObjectConversionTrait{
        toJSON as exportToJSON;
    }
}

$p = new Pessoa;
$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
print $p->toXML();
print '<br>'.PHP_EOL;
print $p->toJSON();
print '<br>'.PHP_EOL;
print '<br>'.PHP_EOL;
$p2 = new Produto;
$p2->descricao = 'Chocolate';
$p2->preco = 7;
print $p2->exportToJSON();