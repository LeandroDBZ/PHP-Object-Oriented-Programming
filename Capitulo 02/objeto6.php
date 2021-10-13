<?php
class Produto{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        print "Construído: Objeto {$this->descricao}, 
        estoque {$this->estoque}, preço {$this->preco}<br>\n";
    }
    public function __destruct(){
        print "Destruído: Objeto {$this->descricao}, 
        estoque {$this->estoque}, preço {$this->preco}<br>\n";
    }
}

$p1 = new Produto('Chocolate', 10, 5);
unset($p1);
$p2 = new Produto('Café', 100, 7);
unset($p2);