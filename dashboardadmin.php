<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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
             border-width: 3px 3px 3px 3px; 
             border-style:solid; 
             border-color: #000 #000 #000 #000; 
             padding: 3px;
        
        }

        .header {
            background-color: #fff;
            color: #000;
            width: 100%;
            padding: 30px;
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

        .card h1 {
            font-size: 1.2rem;
            color:#000;
            text-align: center;
        }
        
        
        .teste {
            width: 100%;
            height: 300px;
            object-fit: cover;
}
      
    </style>
</head>
<body>
    <div class="header">
        <img src="imagens/WhatsApp Image 2023-12-01 at 16.40.15.png" alt="">
        <div class="links">
            <a href="">Editar carro</a>
            <a href="cadastrocarro.php">cadastrar carro</a>
            <a href="login.php">Sair</a>
        </div>
        <a href="editarcadastro.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
    </div>
    <img class="teste" src="imagens/veiculoplaca.jpg" alt="">
    
    <div class="container">
      <h1>Lista de carros</h1>
    </div>