<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        
            background: linear-gradient(to bottom, #9ADBAF, #BFDBD2);
 }

 .sidebar {
            background-color: #BFDBD2;
            color: #000;
            width: 200px;
            padding: 20px;
            height: 100vh;
        }
        .sidebar a {
            display: block;
            background-color: #9ADBAF;
            color: black;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>Dashboard</h1>
        <a href="editarcadastro.php">Editar cadastro</a>
        <a href="cadastrocarro.php">Cadastrar carro</a>
        <a href="editarcarro.php">Editar carro</a>
        <a href="paginaagendamento.php">Agendar aula</a>
        <a href="login.php">Sair</a>

    </div>