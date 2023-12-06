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
        header('Location:editaraluno.php');
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
<html>
<head>
    <link rel="stylesheet" href="modal.css">
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
        .editar {
           
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
            height: 340px;

           
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
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
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
            color:#000
        }
        .card h2 {
            font-size: .9rem;
            color:#000;
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
            
            border-color:#000;
            border-width: 2px;
            border-style:solid;
            border-radius:50px;
}table {
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
</head>
<body>
    <div id="div_principal">    
    </div>
    <div class="header">
        <a href="dashboard.php"><img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt=""></a>
        <a href="editarcadastro.php" class="editar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
    </div>
    <img class="teste" src="imagens/OIG.jpg" alt="">
    <div class="conteudo">
        <h1 class="materia-titulo">Meus dados </h1>
        
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
    

       