<?php
function lista_pessoa(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = 'SELECT * FROM pessoa ORDER BY id';
    $result = mysqli_query($conn, $query);
    $list = mysqli_fetch_all($result);
    mysqli_close($conn);
    return $list;
}

function excluir_pessoa($id){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "DELETE FROM pessoa WHERE id = '{$id}'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}

function get_pessoa($id){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "SELECT * FROM pessoa WHERE id='{$id}'";
    $result = mysqli_query($conn, $query);
    $pessoa = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $pessoa;
}

function get_next_pessoa(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "SELECT max(id) as next FROM pessoa";
    $result = mysqli_query($conn, $query);
    $next = (int) mysqli_fetch_assoc($result)['next'] + 1;
    mysqli_close($conn);
    return $next;
}

function insert_pessoa($pessoa){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "INSERT INTO pessoa (id, nome, endereco, bairro, 
                    telefone, email, id_cidade)
                    VALUES ('{$pessoa['id']}', '{$pessoa['nome']}', '{$pessoa['endereco']}', 
                    '{$pessoa['bairro']}', '{$pessoa['telefone']}', '{$pessoa['email']}', 
                    '{$pessoa['[id_cidade']}')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}

function update_pessoa($pessoa){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = "UPDATE pessoa SET 
    nome = '{$pessoa['nome']}',
    endereco = '{$pessoa['endereco']}',
    bairro = '{$pessoa['bairro']}',
    telefone = '{$pessoa['telefone']}',
    email = '{$pessoa['email']}',
    id_cidade = '{$pessoa['[id_cidade']}'
    WHERE id = '{$pessoa['[id']}'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}