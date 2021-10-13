<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/list.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Listagem de Pessoas</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
    $query = 'SELECT * FROM pessoa ORDER BY id';
    $result = mysqli_query($conn, $query);
    print '<table border=1>';
    print '<thead>';
    print '<tr>';
    print '<th></th>';
    print '<th></th>';
    print '<th> id </th>';
    print '<th> Nome </th>';
    print '<th> Endereço </th>';
    print '<th> Bairro </th>';
    print '<th> Telefone </th>';
    print '</tr>';
    print '</thead>';
    print '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $id_cidade = $row['id_cidade'];

        print "<tr>";
        print "<td align='center'>
                <a href='pessoa_form_edit.php?id={$id}'>
                <img src='images/edit.png' style='width:17px'>
                </a></td>";
        print "<td align='center'>
                <a href='pessoa_delete.php?id={$id}'>
                <img src='images/remove.png' style='width:17px'>
                </a></td>";
        print "<td align='center'>{$id}</td>";
        print "<td>{$nome}</td>";
        print "<td>{$endereco}</td>";
        print "<td>{$bairro}</td>";
        print "<td>{$telefone}</td>";
        print '</tr>';
    }
    print '</tbody>';
    print '</table>';
    ?>
    <button onclick="window.location='pessoa_form_insert.php'">
        <img src='images/insert.png' style='width:17px'> Inserir
    </button>
</body>
</html>