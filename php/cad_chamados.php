<?php 
// receber dados de fora
    $Tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];
    $urgencia = $_POST['urgencia'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
   
    

//incluir o arquivo de conexao
include 'conexao.php';

//istrução sql para inserir os dados
$insert = "INSERT INTO tb_chamados VALUE (null, $Tipo, $categoria, $urgencia, $titulo, $descricao)";

//executar a instruçoa sql dentro do bd utilizao a função query()

$query = $conexao->query($insert);

if ($query == true) {
    echo "<script> alert('Usuario cadastrado sucesso!'); window.location.href = '../index.html' </script>";
}
?>