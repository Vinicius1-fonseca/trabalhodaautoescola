<?php
include "conexao.php";
session_start();
$id = $_SESSION['id_usuario'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['alterar'])) {


    $nome = $_POST['nomealuno'];
    $data_nascimento = $_POST['datanasc'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['fone'];    

    $sql = "update `alunos` set nome='$nome', cpf='$cpf', data_nascimento='$data_nascimento' where `id`=$id";
    $resultado = mysqli_query($con,$sql);
    if($resultado){
        header('Location:editarcadastro.php');
    } 

}else if(isset($_POST['excluir'])){
    $sql = "delete from `alunos` where id=$id ";
    $resultado = mysqli_query($con,$sql);
    if($resultado){
        header('Location:cadastroalunos.php');
    }
}

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .conteudo {
            flex-grow: 1;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
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
        height: 50%;
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
<body>
    <div class="sidebar">
        <h1>Dashboard</h1>
        <a href="editarcadastro.php">Editar aluno</a>
        <a href="cadastrocarro.php">Cadastrar carro</a>
        <a href="editarcarro.php">Editar carro</a>
        <a href="paginaagendamento.php">Agendar aula</a>
        <a href="login.php">Sair</a>

    </div>
    <div class="conteudo">
        <h1>MEUS DADOS</h1>
    
    <?php
    include "conexao.php";
      $id_usuario = $_SESSION['id_usuario']; 

      $stmt = $con->prepare("SELECT * FROM alunos WHERE id = ?");
      $stmt->bind_param("i", $id_usuario);

      if($stmt->execute()){
          $resultado = $stmt->get_result();
          echo "<table>";
          echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Endereço</th><th>Telefone</th></tr>";

          while($row = $resultado->fetch_assoc()) {
              echo "<tr><td>" . $row['nome'] . "</td><td>" . $row['data_nascimento'] . "</td><td>" . $row['endereco'] . "</td><td>" . $row['telefone'] . "</td> </tr>";
          }

          echo "</table>";
}

?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>EDITAR DADOS</h1>
    <!-- Ao enviar o formulário a página recarrega permitindo executar o php encima  -->
    <form id="editForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="nomealuno">Nome:</label>
        <input type="text" id="nomealuno" name="nomealuno" value="<?php echo $_SESSION['nome'];?>" required>

        <label for="Datanasc">Data de Nascimento:</label>
        <input type="date" id="datanasc" name="datanasc" value="<?php echo $_SESSION['data_nascimento'];?>"  required> 
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" value="<?php echo $_SESSION['endereco'];?>" required>

        <label for="fone">Celular com DDD</label>
	    <input type="tel" id="fone" name="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999" value="<?php echo $_SESSION['telefone'];?>">  
        <button type="submit" name ="alterar">Alterar </button>
        <br><br>
        <button type="submit" name="excluir" onclick="return confirm('Tem certeza de que deseja excluir o usuário?')">Excluir Usuário</button>
    </form>
  </div>
  <script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
    modal.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

    var cells = document.querySelectorAll("td");
    cells.forEach(function(cell) {
    cell.addEventListener("click", function() {

    modal.style.display = "block";
  });
});
  </script>
</div>
</div>