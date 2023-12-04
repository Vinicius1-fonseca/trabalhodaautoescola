
<!DOCTYPE html>
<html lang="en">
<head>

<script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de agendamento </title>
</head>

    

   
   <style>



        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            overflow: hidden; 
            height: 100vh;
            background: url('imagens/baliza.jpg'); 
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
        <form action="tratamento_dados/agendamento.php" method="POST">
        <label for="veiculoaula">Selecione o veiculo :</label>
        <select id="veiculoaula" name="veiculoaula" required>
        <?php
        include "conexao.php";

        $sql = "SELECT modelo FROM carros WHERE id NOT IN (SELECT carro_id FROM agendamentos)";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['modelo'] . '">' . $row['modelo'] . '</option>';
        }
        ?>
        </select>
        
        
        <label for="dataaula">Selecione a data :</label>
        <input type="date" id="dataaula" name="dataaula" required required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="99/99/1111">


        <label for="horarioaula">horario desejado:</label>

        <input type="time" id="hora-desejada" name="hora-desejada" required pattern="[0-9]{2}:[0-9]{2}h" placeholder="99:11h">
        <button>confirmar</button>
        </form>
    </body>