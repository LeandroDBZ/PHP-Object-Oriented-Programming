<?php
$dados = $_POST;
$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
$query = "SELECT max(id) as next FROM pessoa";
$result = mysqli_query($conn, $query);
$next = (int) mysqli_fetch_assoc($result)['next']+1;
$sql = "INSERT INTO pessoa (id,
                        nome,
                        endereco,
                        bairro,
                        telefone,
                        email,
                        id_cidade)
        VALUES ('{$next}',
                    '{$dados['nome']}',
                    '{$dados['endereco']}',
                    '{$dados['bairro']}',
                    '{$dados['telefone']}',
                    '{$dados['email']}',
                    '{$dados['id_cidade']}'
                            )";

$result = mysqli_query($conn, $sql);

if($result){
    print 'Registro inserido com sucesso';
}else{
    printf("Error message: %s\n", mysqli_error($conn));
}
mysqli_close($conn);