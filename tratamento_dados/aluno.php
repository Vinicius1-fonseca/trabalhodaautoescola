<?php
include "../conexao.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST['nomealuno'];
$data_nascimento = $_POST['datanasc'];
$cpf = $_POST['cpf'];
$cpf = str_replace([".",".",".","-"],"",$cpf);
$endereco = $_POST['endereco'];
$telefone = $_POST['fone'];
$sql =  "INSERT INTO `alunos` (`nome`, `cpf`, `data_nascimento`, `endereco`, `telefone`) VALUES ('$nome','$cpf','$data_nascimento','$endereco','$telefone')";
if(mysqli_query($con, $sql)){
    header('Location: ../paginalogin.php');
} 
}
?>