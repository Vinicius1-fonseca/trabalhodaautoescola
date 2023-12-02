
<!DOCTYPE html>
<html lang="en">
<head>

<script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de cadastro de alunos </title>
</head>

    

   
   <style>



        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            overflow: hidden; 
            height: 100vh;
            background: url('imagens/OIG.jpg') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            
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
        main{
            background-color:#f4f4f4;
            width: 440px;
            height: 100vh;
            position: absolute; 
            overflow: auto;
             z-index: 1;
        }
        h2{
            text-align: center; 
            width: 100%
        }
        img{
            width: 240px;
            height: 240px;
           
        }
        h1 {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3em;
            text-align: center;
            color: #000000;
            text-shadow: 3px 0px 2px rgba(255, 0, 25, 1);
            z-index: 1;
            font-size: 50px;
            color:#f4f4f4;
            text-shadow: 3px 0px 2px rgba(255, 0, 25, 1);
            
            
        }
    </style>
</head>
<body>

    
        <main>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt="">
        </div>
        <h2>Cadastro de Alunos</h2>
    <form action="tratamento_dados/aluno.php" method="POST">
        <label for="nomealuno">Nome:</label>
        <input type="text" id="nomealuno" name="nomealuno" required>

        
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

        <label for="Datanasc">Data de Nascimento:</label>
        <input type="date" id="datanasc" name="datanasc" required>
        
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="fone">Celular com DDD</label>
	<input type="tel" id="fone" name="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999">  
        <button type="submit">cadastrar </button>

    </form>
        </main>