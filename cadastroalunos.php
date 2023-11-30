
<!DOCTYPE html>
<html lang="en">
<head>

<script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de cadastro de alunos </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 3em;
            text-align: center;
            color: #000000;
        }
    </style>
</head>
<body>
<style>
 body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, #9ADBAF, #BFDBD2);
 }


</style>


</body>
<h2>Cadastro de Alunos</h2>
    <form id="alunoForm">


<style>
    body{
    font-family: "Times New Roman";
    background-color: #fff;
}
</style>

</body>
</html>
   
   <style>



        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>

    

    <form action="processar_login.php" method="post">
        <label for="nomealuno">Nome:</label>
        <input type="text" id="nomealuno" name="nomealuno" required>

        
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" maxlength="14">

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
    </form>
</body>
</html>
