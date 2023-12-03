<?php
include "../conexao.php";
session_start();
$aluno_id = $_SESSION['id_usuario'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$carro = $_POST['veiculoaula'];
$data = $_POST['dataaula'];
$horario = $_POST['hora-desejada'];



$sql = "SELECT id FROM carros WHERE modelo = '$carro'";
$resultado = $con->query($sql);
$row = $resultado->fetch_assoc();
$carro_id = $row['id'];

$sql = "INSERT INTO agendamentos (aluno_id, carro_id, data_aula, horario_aula)
VALUES ($aluno_id, $carro_id, '$data', '$horario')";

if(mysqli_query($con, $sql)){
    header('Location: ../dashboard.php');
} 
}

?>