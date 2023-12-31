
    
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
        <h2>pagina de login</h2>
        </div>
        

    <form action="tratamento_dados/login.php" method="POST">
        <label for="nome">Nome de usuário:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">Senha:</label>
        <input type="password" id="cpf" name="cpf" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
