<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Cadastro de pessoa</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
        <label for="">Código</label>
        <input name="id" readonly="1" type="text" style="width: 30%">

        <label for="">Nome</label>
        <input name="nome" type="text" style="width: 50%">

        <label for="">Endereço</label>
        <input name="endereco" type="text" style="width: 50%">

        <label for="">Bairro</label>
        <input name="bairro" type="text" style="width: 25%">

        <label for="">Telefone</label>
        <input name="telefone" type="text" style="width: 25%">

        <label for="">Email</label>
        <input name="email" type="text" style="width: 25%">

        <label for="">Cidade</label>
        <select name="id_cidade" type="text" style="width: 25%">
            <?php
            require_once 'lista_combo_cidades.php';
            print lista_combo_cidades();
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>