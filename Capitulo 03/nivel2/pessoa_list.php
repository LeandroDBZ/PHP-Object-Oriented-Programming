<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/list.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Listagem de pessoas</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
        $id = (int) $_GET['id'];
        $del = "DELETE FROM pessoa WHERE id='{$id}'";
        $result = mysqli_query($conn, $del);
    }
    $select = 'SELECT * FROM pessoa ORDER BY id';
    $result = mysqli_query($conn, $select);

    print '<table border=1>';
    print '<thead>';
    print '<tr>';
    print '<th></th>';
    print '<th></th>';
    print '<th>ID</th>';
    print '<th>Nome</th>';
    print '<th>Endereço</th>';
    print '<th>Bairro</th>';
    print '<th>Telefone</th>';
    print '</tr>';
    print '</thead>';
    print '<tbody>';
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        print '<tr>';
        print "<td align='center'>
        <a href='pessoa_form.php?action=edit&id={$id}'>
        <img src='images/edit.png' style='width:17px'>
        </a></td>";
        print "<td align='center'>
        <a href='pessoa_list.php?action=delete&id={$id}'>
        <img src='images/remove.png' style='width:17px'>
        </a></td>";
        print "<td>{$id}</td>";
        print "<td>{$nome}</td>";
        print "<td>{$endereco}</td>";
        print "<td>{$bairro}</td>";
        print "<td>{$telefone}</td>";
        print '</tr>';
    }
    print '</tbody>';
    print '</table>';
    ?>
    <button onclick="window.location='pessoa_form.php'">
        <img src='images/insert.png' style='width:17px'> Inserir
    </button>
</body>
</html>