<?php
   include('session.php');
?>

<!DOCTYPE html>
<meta charset="UTF-8">


<head>
 
  <style>
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>

  <h2>Página de cadastro de clientes</h2>
 

  <div class="dropdown">
    <button class="dropbtn">Cadastrar</button>
    <div class="dropdown-content">
      <a href="cadastro_cliente.html">Cadastrar cliente</a>
      <a href="cadastro_telefone.html">Cadastrar telefone</a>
      <a href="cadastro_endereco.html">Cadastrar endereço</a>
      <a href="userLogin.html">Cadastrar usuário</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Pesquisar</button>
    <div class="dropdown-content">
      <a href="pesquisar_cliente.html">Pesquisar cliente</a>
      <a href="pesquisar_tel.html">Pesquisar tel do cliente</a>
      <a href="pesquisar_end.html">Pesquisar endereco do cliente</a>
      <a href="pesquisar_cliente_join.html">Pesquisar completa</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Alterar</button>
    <div class="dropdown-content">
      <a href="deletar.html">Deletar registro</a>
      <a href="update.html">Alterar registro</a>
      <a href="update2.html">Alterar cliente ou telefone ou endereco</a>
    </div>
  </div>

  <a href='logout.php'><button class="dropbtn" >logout-deslogar</button></a>


</body>

</html>