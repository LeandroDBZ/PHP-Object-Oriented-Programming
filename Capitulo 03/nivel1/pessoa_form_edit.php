<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Cadastro Pessoa</title>
</head>
<?php
    if(!empty($_GET['id'])){
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
        $id = (int) $_GET['id'];
        $query = "SELECT * FROM pessoa WHERE id='{$id}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $id_cidade = $row['id_cidade'];
    }
?>
<body>
    <form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
        <label for="">Código</label>
        <input name="id" readonly="1" type="text" style="width: 30%" value="<?=$id?>">

        <label for="">Nome</label>
        <input name="nome" type="text" style="width: 50%" value="<?=$nome?>">

        <label for="">Endereço</label>
        <input name="endereco" type="text" style="width: 50%" value="<?=$endereco?>">

        <label for="">Bairro</label>
        <input name="bairro" type="text" style="width: 25%" value="<?=$bairro?>">

        <label for="">Telefone</label>
        <input name="telefone" type="text" style="width: 25%" value="<?=$telefone?>">

        <label for="">Email</label>
        <input name="email" type="text" style="width: 25%" value="<?=$email?>">

        <label for="">Cidade</label>
        <select name="id_cidade" type="text" style="width: 25%">
            <?php
            require_once 'lista_combo_cidades.php';
            print lista_combo_cidades($id_cidade);
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>