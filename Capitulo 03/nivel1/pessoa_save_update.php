<?php
$dados = $_POST;
if($dados['id']){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "UPDATE pessoa SET nome = '{$dados['nome']}',
    endereco = '{$dados['endereco']}',
    bairro = '{$dados['bairro']}',
    telefone = '{$dados['telefone']}',
    email = '{$dados['email']}',
    id_cidade = '{$dados['id_cidade']}'
    WHERE id = '{$dados['id']}'";

    $result = mysqli_query($conn, $query);
    if($result){
        print 'Registro atualizado com sucesso';
    }else{
        printf("Error message: %s\n", mysqli_error($conn));
    }
    mysqli_close($conn);
}
