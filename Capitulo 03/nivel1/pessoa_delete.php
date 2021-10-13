<?php
$dados = $_GET;
if(!empty($dados['id'])){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "DELETE FROM pessoa WHERE id = '{$dados['id']}'";
    $result = mysqli_query($conn, $query);

    if($result){
        print 'Registro excluído com sucesso';
    }else{
        printf("Error message: %s\n", mysqli_error($conn));
    }
    mysqli_close($conn);
}