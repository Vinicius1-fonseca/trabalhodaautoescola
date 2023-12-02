<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #fff;
            margin: 0;
        }  
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .sidebar {
            background-color: #fff;
            color: #000;
            width: 200px;
            padding: 20px;
            height: 100vh;
        }
        .sidebar a {
            display: block;
            background-color: #fff;
            color: black;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .conteudo {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center; 
            align-items: flex-start; 
            flex-grow: 1;
            padding: 20px;
        }
        h1 {
            text-align: center;
            width: 100%; /* Garante que o título ocupa toda a largura do contêiner .conteudo */
            margin-bottom: 20px; /* Adiciona espaçamento abaixo do título */
        }
        .card {
            background-color: #fff;
            width: 180px;
            height: 260px;
            border-radius: 12px;
            box-shadow: 4px 4px 12px #aaaa;
            margin-right: 20px; /* Adiciona uma margem para separar as divs */
            margin-bottom: 400px; /* Adiciona uma margem para separar as divs */
        }
        .card img {
            width: 100%;
            height: 130px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
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
        }
        .card h2 {
            font-size: .9rem;
            color: #aaaa;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>Dashboard</h1>
        <a href="editarcadastro.php">Editar cadastro</a>
        <a href="paginaagendamento.php">Agendar aula</a>
        <a href="login.php">Sair</a>
    </div>
    <div class="conteudo">
        <h1>Matérias</h1>
        <div class="card">
            <img src="imagens/sinais-de-trânsito-dok-despachante-regulamentação-1024x739.png">
            <div>
                <h1>Aula</h1>
                <h2>Sinalizações de Trânsito</h2>
                <button>Saiba mais</button>
            </div>
        </div>

        <div class="card">
            <img src="imagens/download.jpg">
            <div>
                <h1>Aula</h1>
                <h2>Circulação e Conduta</h2>
                <button>Saiba mais</button>
            </div>
        </div>


        <div class="card">
            <img src="imagens/5f3d9-MENDES--KOCH---DIREO-DEFENSIVA.jpg">
            <div>
                <h1>Aula</h1>
                <h2>Sinalizações de Trânsito</h2>
                <button>Saiba mais</button>
            </div>
        </div>

    </div>
</body>
</html>
