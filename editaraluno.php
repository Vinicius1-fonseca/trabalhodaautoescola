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
            width: 2000px;
            height: 800px;
            border-color:#000;
            border-width: 2px;
            border-style:solid;
           
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
}
    </style>
</head>
<body>
    <div id="div_principal">    
    </div>
    <div class="header">
        <img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt="">
        <div class="links">
            <a href="dashboard.php">voltar pra dashboard</a>
            <a href="paginalogin.php">Sair</a>
        </div>
        <a href="editarcadastro.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
    </div>
    <img class="teste" src="imagens/OIG.jpg" alt="">
    <div class="conteudo">
        <h1 class="materia-titulo">Meus dados </h1>
        
        <form action="tratamento_dados/aluno.php" method="POST">
        <label for="nomealuno">Nome:</label>
        <input type="text" id="nomealuno" name="nomealuno" required>
        <br>  <br>

        
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="14">

    <script>
        document.getElementById('cpf').addEventListener('input', function (event) {
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
      <br>  <br>

        <label for="Datanasc">Data de Nascimento:</label>
        <input type="date" id="datanasc" name="datanasc" required>
        <br>  <br>
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>  <br>
        <label for="fone">Celular com DDD</label>
	<input type="tel" id="fone" name="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999">  
    <br>  <br>
        <button type="submit">editar</button>
        </form>
    </div>
    

       