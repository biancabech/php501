<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $email = "daniel.silva%";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->prepare('SELECT * FROM usuarios WHERE nome LIKE :email');
    $statement->bindParam(':email', $email, PDO::PARAM_STR, 50);
    $statement->execute();

    $res = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($res as $usuarios){
        echo $usuarios['nome'] . "<br>";
        echo $usuarios['email'] . "<br>";
    }

} catch (PDOException $erro) {
    echo $erro;
}
