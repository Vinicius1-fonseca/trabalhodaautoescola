<?php
include "conexao.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['alterarcarro'])) {
        $id_carro = $_POST['carroId'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];
        $capacidade = $_POST['capacidade'];

        $sql = "update `carros` set marca='$marca', modelo='$modelo', ano='$ano', placa='$placa', capacidade_passageiros='$capacidade' where `id`=$id_carro";
        $resultado = mysqli_query($con, $sql);
        if ($resultado) {
            header('Location:dashboardadmin.php');
        }
    } else if (isset($_POST['excluircarro'])) {
        $id_carro = $_POST['carroId'];
        $sql = "delete from `carros` where id=$id_carro ";
        $resultado = mysqli_query($con, $sql);
        if ($resultado) {
            header('Location:dashboardadmin.php');
        }
    }else if (isset($_POST['alteraraluno'])){
        $nome = $_POST['nomealuno'];
        $data_nascimento = $_POST['datanasc'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['fone'];    
        $id_aluno = $_POST['alunoId'];

        $sql = "update `alunos` set nome='$nome', cpf='$cpf', data_nascimento='$data_nascimento' where `id`=$id_aluno";
        $resultado = mysqli_query($con,$sql);
        if($resultado){
            header('Location:dashboardadmin.php');
        } 
    }else if (isset($_POST['excluiraluno'])){
        $id_aluno = $_POST['alunoId'];
        $sql = "delete from `alunos` where id=$id_aluno ";
        $resultado = mysqli_query($con, $sql);
        if ($resultado) {
            header('Location:dashboardadmin.php');
        }
    }
}


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

        html,
        body {
            margin: 0;
            padding: 0;

        }

        img {
            width: 200px;
            height: 200px;
            background: #fff;
            color: #fff;
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

        }

        svg {
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
            box-shadow: 4px 4px 12px #aaaa;
            margin-right: 20px;
            margin-bottom: 400px;
        }

        .card img {
            width: 100%;
            height: 130px;

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
            color: #000
        }

        .card h2 {
            font-size: .9rem;
            color: #000;
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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            height: 60%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        form {
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #DB423C;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        #editForm {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt="">
        <div class="links">
            <a href="cadastrocarro.php">Cadastrar carro</a>
            <a href="paginalogin.php">sair</a>

        </div>

    </div>
    <img class="teste" src="imagens/OIG.jpg" alt="">

    <br>

    <div class="conteudo">
        <h1 class="carroscadastrados">Carros cadastrados </h1>

        <?php
        include "conexao.php";


        $sqlCarros = "SELECT * FROM carros";
        $resultCarros = $con->query($sqlCarros);

        if ($resultCarros->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Ano</th><th>Placa</th><th>Capacidade</th></tr>';
            while ($rowCarros = $resultCarros->fetch_assoc()) {
                echo '<tr data-carro-id="' . $rowCarros['id'] . '">';;
                echo '<td>' . $rowCarros['id'] . '</td>';
                echo '<td>' . $rowCarros['marca'] . '</td>';
                echo '<td>' . $rowCarros['modelo'] . '</td>';
                echo '<td>' . $rowCarros['ano'] . '</td>';
                echo '<td>' . $rowCarros['placa'] . '</td>';
                echo '<td>' . $rowCarros['capacidade_passageiros'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Nenhum carro cadastrado.</p>';
        }
        ?>



        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h1>EDITAR DADOS</h1>

                <!-- Ao enviar o formulário a página recarrega permitindo executar o PHP encima -->
                <form id="editForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>

                    <label for="modelo">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" required>

                    <label for="ano">Ano:</label>
                    <input type="text" id="ano" name="ano" required>

                    <label for="placa">Placa:</label>
                    <input type="text" id="placa" name="placa" required>

                    <label for="capacidade">Capacidade:</label>
                    <input type="text" id="capacidade" name="capacidade" required>

                    <input type="hidden" id="carroId" name="carroId">

                    <button type="submit" name="alterarcarro">Alterar</button>
                    <br><br>
                    <button type="submit" name="excluircarro" onclick="return confirm('Tem certeza de que deseja excluir o carro?')">Excluir Carro</button>
                </form>
            </div>
        </div>


    </div><br><br><br><br><br><br>
    <div class="conteudo">
        <h1 class="Alunoscasadtrados">Alunos cadastrados </h1>

        <?php
        include "conexao.php";


        $sqlAlunos = "SELECT * FROM alunos";
        $resultAlunos = $con->query($sqlAlunos);

        if ($resultAlunos->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>ID</th><th>Nome</th><th>Cpf</th><th>Data de nascimento</th><th>Endereço</th><th>Telefone</th></tr>';
            while ($rowAlunos = $resultAlunos->fetch_assoc()) {
                echo '<tr data-aluno-id="' . $rowAlunos['id'] . '">';;
                echo '<td>' . $rowAlunos['id'] . '</td>';
                echo '<td>' . $rowAlunos['nome'] . '</td>';
                echo '<td>' . $rowAlunos['cpf'] . '</td>';
                echo '<td>' . $rowAlunos['data_nascimento'] . '</td>';
                echo '<td>' . $rowAlunos['endereco'] . '</td>';
                echo '<td>' . $rowAlunos['telefone'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Nenhum aluno cadastrado.</p>';
        }
        ?>
        <div id="myModalAluno" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h1>EDITAR DADOS</h1>

                
                <form id="editFormAluno" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <label for="nomealuno">Nome:</label>
                    <input type="text" id="nomealuno" name="nomealuno" required>


                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14" required pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="999.999.999-11">

                    <script>
                        document.getElementById('cpf').addEventListener('input', function(event) {
                            let inputValue = event.target.value.replace(/\D/g, '');

                            if (inputValue.length > 11) {
                                inputValue = inputValue.slice(0, 11);
                            }

                            if (inputValue.length > 9) {
                                event.target.value = inputValue.replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3-');
                            } else if (inputValue.length > 6) {
                                event.target.value = inputValue.replace(/(\d{3})(\d{3})/, '$1.$2.');
                            } else if (inputValue.length > 3) {
                                event.target.value = inputValue.replace(/(\d{3})/, '$1.');
                            } else {
                                event.target.value = inputValue;
                            }
                        });
                    </script>

                    <label for="Datanasc">Data de Nascimento:</label>
                    <input type="date" id="datanasc" name="datanasc" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="99/99/1111">


                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="fone">Celular com DDD</label>
                    <input type="text" id="fone" name="fone" required pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}" placeholder="Digite o número de telefone." title="Digite dessa forma: (11) 00000-0000">

                    <input type="hidden" id="alunoId" name="alunoId">

                    <button type="submit" name="alteraraluno">Alterar</button>
                    <br><br>
                    <button type="submit" name="excluiraluno" onclick="return confirm('Tem certeza de que deseja excluir o aluno?')">Excluir Aluno</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var modalCarro = document.getElementById("myModal");
        var modalAluno = document.getElementById("myModalAluno");

            function openModal(modal) {
            modal.style.display = "block";
    }

            function closeModal(modal) {
                modal.style.display = "none";
            }

        var rowsCarro = document.querySelectorAll("tr[data-carro-id]");
        rowsCarro.forEach(function(row) {
            row.addEventListener("click", function() {
                openModal(modalCarro);
                
                var cells = row.getElementsByTagName("td");
                document.getElementById("marca").value = cells[1].innerText;
                document.getElementById("modelo").value = cells[2].innerText;
                document.getElementById("ano").value = cells[3].innerText;
                document.getElementById("placa").value = cells[4].innerText;
                document.getElementById("capacidade").value = cells[5].innerText;
                var carroId = row.getAttribute("data-carro-id");
                document.getElementById("carroId").value = carroId;
            });
        });

        var rowsAluno = document.querySelectorAll("tr[data-aluno-id]");
        rowsAluno.forEach(function(row) {
            row.addEventListener("click", function() {
                openModal(modalAluno);
                
                var cells = row.getElementsByTagName("td");
                document.getElementById("nomealuno").value = cells[1].innerText;
                document.getElementById("cpf").value = cells[2].innerText;
                document.getElementById("datanasc").value = cells[3].innerText;
                document.getElementById("endereco").value = cells[4].innerText;
                document.getElementById("fone").value = cells[5].innerText;
                var alunoId = row.getAttribute("data-aluno-id");
                document.getElementById("alunoId").value = alunoId;
    });
});
        window.addEventListener("click", function(event) {
            if (event.target === modalCarro) {
                closeModal(modalCarro);
            }
            if (event.target === modalAluno) {
                closeModal(modalAluno);
            }
        });
        </script>