<?php
    include "conexao.php";
    session_start();
    $id = $_SESSION['id_usuario'];


    $sql = "SELECT * FROM agendamentos WHERE aluno_id = $id";
    $result = $con->query($sql);

    
        
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #fff;
            margin: 0;
            flex-direction: column;
            overflow-x: hidden;
        }  
        html, body {
            margin: 0;
            padding: 0;
            
        }
        img{
            width: 200px;
            height: 200px;
        }


        .header {
            background-color: #fff;
            color: #000;
            width: 100%;
            padding: 20px;
            display: flex;
            align-items: center;
        }


        .header a {
            background-color: #fff;
            color: black;
            text-decoration: none;
            padding: 25px;
            margin-left: -2px;
            border-radius: 5px;
        }
        svg{
            margin-left: 1100px;
            width: 45px;
            height: 45px;
        }
        .conteudo {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center; 
            align-items: flex-start; 
            flex-grow: 1;
            padding: 20px;
        }

        .materia-titulo {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }
        .card {
            background-color: #fff;
            width: 180px;
            height: 260px;
            border-radius: 12px;
            box-shadow: 4px 4px 12px #aaaa;
            margin-right: 20px;
            margin-bottom: 400px;
        }
        .card img {
            width: 100%;
            height: 130px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .card div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 4px;
            height: 48%;
        }
        .card h1 {
            font-size: 1.2rem;
        }
        .card h2 {
            font-size: .9rem;
            color: #aaaa;
        }
        .card button {
            background-color: #2192FF;
            height: 30px;
            border: none;
            padding: 4px;
            width: 80%;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 4px;
        }
        .card button:hover {
            background-color: #137de8;
            cursor: pointer;
        }
        .teste {
            width: 100%;
            height: 300px;
            object-fit: cover;
}
        .meus-agendamentos {
            text-align: center;
            margin-top: -317px; 
}
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt="">
        <div class="links">
            <a href="paginaagendamento.php" onclick="openModal()"  >Agendar aula</a>
            <a href="paginalogin.php">Sair</a>
        </div>
       
        <a href="editaraluno.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
    </div>
    <img class="teste" src="imagens/OIG.jpg" alt="">
    <div class="conteudo">
        <h1 class="materia-titulo">Matérias</h1>
        <div class="card">
            <img src="imagens/sinais-de-trânsito-dok-despachante-regulamentação-1024x739.png">
            <div>
                <h1>Aula</h1>
                <h2>Sinalizações de Trânsito</h2>
                <button>Saiba mais</button>
            </div>
        </div>

        <div class="card">
            <img src="imagens/download.jpg">
            <div>
                <h1>Aula</h1>
                <h2>Circulação e Conduta</h2>
                <button>Saiba mais</button>
            </div>
        </div>

        <div class="card">
            <img src="imagens/5f3d9-MENDES--KOCH---DIREO-DEFENSIVA.jpg">
            <div>
                <h1>Aula</h1>
                <h2>Sinalizações de Trânsito</h2>
                <button>Saiba mais</button>
            </div>
        </div>
        </div>
        <h1 class="meus-agendamentos">Aula Agendada</h1>
        <?php
        if ($result->num_rows > 0) {

            echo '<table>';
            echo '<tr><th>ID</th><th>Carro</th><th>Data</th><th>Horário</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                $carro_id = $row['carro_id'];
                $sqlCarro = "SELECT modelo FROM carros WHERE id = $carro_id";
                $resultCarro = $con->query($sqlCarro);
                $rowCarro = $resultCarro->fetch_assoc();
                echo '<td>' . $rowCarro['modelo'] . '</td>';
                echo '<td>' . $row['data_aula'] . '</td>';
                echo '<td>' . $row['horario_aula'] . '</td>';
                echo '<td><a href="tratamento_dados/cancelar.php?id=' . $row['id'] . '">Cancelar</a></td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p >Nenhum agendamento encontrado.</p>';
        }
        ?>
        </div>
        