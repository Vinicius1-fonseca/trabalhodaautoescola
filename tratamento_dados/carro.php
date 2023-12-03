<?php
include "../conexao.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$modelo = $_POST['modelocarro'];
$marca = $_POST['marcacarro'];
$ano = $_POST['anocarro'];
$placa = $_POST['placacarro'];
$capacidade = $_POST['capacidadecarro'];

$sql =  "INSERT INTO `carros`(`marca`, `modelo`, `ano`, `placa`, `capacidade_passageiros`) VALUES ('$marca','$modelo','$ano','$placa','$capacidade') ";
if(mysqli_query($con, $sql)){
    header('Location: ../dashboardadmin.php');
} 
}

?>