<?php
class Pessoa{
    private static $conn;
    public static function getConnection(){
        if (empty(self::$conn)) {
            $conexao = parse_ini_file('config/livro.ini');
            $host = $conexao['host'];
            $name = $conexao['name'];
            $user = $conexao['user'];
            $pass = $conexao['pass'];
            self::$conn = new PDO("mysql:dbname={$name};user={$user};password={$pass};host={$host}");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
    public static function save($pessoa){
        $conn = self::getConnection();
        if (empty($pessoa['id'])) {
            $result = $conn->query("SELECT max(id) as next FROM pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['next']+1;
            $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade)
            VALUE (:id, :nome, :endereco, :bairro, :telefone, :email, :id_cidade)";
        } else{
            $sql = "UPDATE pessoa SET nome = :nome, endereco = :endereco, bairro = :bairro,
            telefone = :telefone, email = :email, id_cidade = :id_cidade WHERE id = :id";
        }
        $result = $conn->prepare($sql);
        $result->execute([':id' => $pessoa['id'],
                        ':nome' => $pessoa['nome'],
                        ':endereco' => $pessoa['endereco'],
                        ':bairro' => $pessoa['bairro'],
                        ':telefone' => $pessoa['telefone'],
                        ':email' => $pessoa['email'],
                       ':id_cidade' => $pessoa['id_cidade']
        ]);
    }
}