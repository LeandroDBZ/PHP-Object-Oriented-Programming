<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
if (!empty($_GET['action']) AND $_GET['action'] =='delete') {
    $id = (int) $_GET['id'];
    $delete = "DELETE FROM pessoa WHERE id='{$id}'";
    $result = mysqli_query($conn, $delete);
}
$select = 'SELECT * FROM pessoa ORDER BY id';
$result = mysqli_query($conn, $select);
$items = '';
while ($row = mysqli_fetch_assoc($result)) {
    $item = file_get_contents('html/item.html');
    $item = str_replace('{id}', $row['id'], $item);
    $item = str_replace('{nome}', $row['nome'], $item);
    $item = str_replace('{endereco}', $row['endereco'], $item);
    $item = str_replace('{bairro}', $row['bairro'], $item);
    $item = str_replace('{telefone}', $row['telefone'], $item);
    $items.= $item;
}
$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);
print $list;