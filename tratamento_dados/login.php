<?php
session_start();
include "../conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

//prepara a consulta sql '?' será o nome
$sql = "SELECT * FROM alunos WHERE cpf = ?";
//vai retornar um objeto representando a consulta pronta 
$stmt = $con->prepare($sql);
//substituindo o '?' pelo nome
$stmt->bind_param("s", $cpf);
//executando a função
$stmt->execute();
//guardando o resultado
$resultado = $stmt->get_result();
//armazenando a matriz resultante do banco de dados na variavel usuario
$usuario = $resultado->fetch_assoc();

//VERIFICAO ADMIN!!!!
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    // Verifica se as credenciais são válidas
    if ($nome === 'admin' && $cpf === 'cpfadmin') {
        // Credenciais corretas, redireciona para a página de administração
        header('Location: ../dashboardadmin.php');
        exit;
}
}


if ($usuario) {
    // O usuário existe
    if ($cpf == $usuario['cpf'] && $nome == $usuario['nome']) {
        // O e-mail e a senha estão certos
        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['endereco'] = $usuario['endereco'];
        $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
        $_SESSION['telefone'] = $usuario['telefone'];
        header("Location: ../dashboard.php");
    } else {
        echo 'Credencias inválidas!';
    }
} else {
    echo 'Usuário inexistente!';
}
}

?>