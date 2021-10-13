<?php
try{
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '');

    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(1, 'Érico Veríssimo')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(2, 'John Lennon')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(3, 'Mahatma Gandhi')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(4, 'Ayrton Senna')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(5, 'Charlie Chaplin')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(6, 'Anita Garibaldi')");
    $conn->exec("ISERT INTO famosos(codigo, nome) VALUES(7, 'Mário Quintana')");

    $conn = null;
}catch(PDOExeption $e){
    print "Erro!: ".$e->getMessage()."\n";
}