<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $count = $conexao->exec("INSERT INTO usuarios (nome,email) VALUES ('Daniel','daniel.silva@4linux.com') ");
    echo "$count linha foram apagadas";
} catch (PDOException $erro) {
    echo $erro;
}
