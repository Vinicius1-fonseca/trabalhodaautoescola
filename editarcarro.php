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
    flex-direction: column;
    align-items: center; 
    justify-content: center; 
    text-align: center; 
    margin: 0 auto; 
    max-width: 600px;
    
            
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
            <a href="dashboardadmin.php">voltar pra dashboard</a>
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
    <h1 class="materia-titulo">Pagina de edição de carro </h1>
        <h1 class="materia-titulo">Dados do  veiculo </h1>
    
        <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/user/edit.php" method="POST">
            <label for="modelocarro">Modelo do carro:</label>
        <input type="text" id="modelocarro" name="modelocarro" required>
        <br><br>
        <label for="marcacarro">marca:</label>
        <input type="text" id="marcacarro" name="marcacarro" required>
        <br><br>
        <label for="anocarro">ano:</label>
        <input type="text" id="anocarro" name="anocarro" required>
        <br><br>
        <label for="placacarro">placa:</label>
        <input type="text" id="placacarro" name="placacarro" required>
        <br><br>
        <label for="capacidadecarro">capacidade:</label>
        <input type="number" id="capacidadecarro" name="capacidadecarro" required>
        <br><br>
                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
    </div>
       