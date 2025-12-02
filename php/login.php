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

    $email_bd = $resutado ['email'];
    $senha_bd = $resutado ['senha'];

    if($email == $email_bd && $senha == $senha_bd) {
        session_start();
        $SESSION['id_usuario'] = $resutado ['id'];
        header('location: ../pag3.php');

        // echo 'foi';
    } else {
        // echo "<script> alert('usuario ou Senha invalida!!); history.back(); </script>";
        echo "<script> alert('Usuario ou senha invalida!'); history.back() </script>";
        // echo 'não foi';
    }

?>