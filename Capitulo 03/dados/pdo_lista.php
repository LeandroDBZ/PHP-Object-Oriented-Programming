<?php
try {
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '');

    $result = $conn->query("SELECT codigo, nome FROM famosos");
    if($result){
        foreach ($result as $row) {
           echo $row['codigo']. ' - ' . $row['nome'] . "<br>\n";
        }
    }
    $conn = null;
} catch (PDOExeption $e) {
    print "Erro!: ".$e->getMessage()."\n";
}