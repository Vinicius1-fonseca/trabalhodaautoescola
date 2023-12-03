<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff; 
      display: flex;
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

    .content {
      padding: 20px;
      flex-grow: 1;
      background: rgba(255, 255, 255, 0.8); /* Adicionando um fundo branco semi-transparente ao conteúdo */
    }

    h3 {
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <h1>instrutores </h1>
    <a href="editarcadastro.php">Editar cadastro de usuario </a>
    <a href="cadastrocarro.php">Editar carro</a>
    <a href="editarcarro.php">Editar carro</a>
    <a href="login.php">Sair</a>
  </div>

  <div class="content">
    <h1>Lista de Carros</h3>

    <!-- Barra de busca -->
    <label for="search">Buscar Carro:</label>
    <input type="text" id="search" oninput="searchCars()" placeholder="Digite o nome do carro">

    <!-- Lista de carros -->
    <ul id="carList">
      <li>Ford Mustang</li>
      <li>Chevrolet Camaro</li>
      <li>Dodge Charger</li>
      <li>Tesla Model S</li>
      <!-- Adicione mais carros conforme necessário -->
    </ul>

    <script>
      // Função para realizar a busca
      function searchCars() {
        // Obtém o valor digitado na barra de busca
        var searchTerm = document.getElementById("search").value.toUpperCase();

        // Obtém a lista de carros
        var carList = document.getElementById("carList");

        // Obtém todos os itens da lista de carros
        var cars = carList.getElementsByTagName("li");

        // Itera sobre os carros e mostra ou esconde conforme a busca
        for (var i = 0; i < cars.length; i++) {
          var carName = cars[i].textContent.toUpperCase();
          if (carName.includes(searchTerm)) {
            cars[i].style.display = "";
          } else {
            cars[i].style.display = "none";
          }
        }
      }
    </script>
  </div>

</body>

</html>