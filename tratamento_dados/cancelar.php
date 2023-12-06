<?php
include "../conexao.php";
$id = $_GET['id'];

$sql = "delete from `agendamentos` where id=$id ";
    $resultado = mysqli_query($con,$sql);
    if($resultado){
        header("Location: ../dashboard.php");
    }

?>