<?php

//recebendo os dados do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];

//inclur o arquivo a conexao para puxar a conexao da variavel $conexao

include 'conexao.php';

//colocar a instrução solect detro da variavel $select

$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

//executar a instrução sql com a função query()

$query = $conexao->query($select);

//pegar o primeiro registro do select e armazenar na variavel $resutado

$resutado = $query->fetch_assoc();

print_r($_POST);
print_r($resutado);
?>

