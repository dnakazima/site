<?php
    include("conexao.php");

    
    $NOME=$_POST['NOME'];
    $SEXO=$_POST['SEXO'];
    $EMAIL=$_POST['EMAIL'];
    $CPF=$_POST['CPF'];
   

    $sql="INSERT INTO CLIENTE (IDCLIENTE,NOME,SEXO,EMAIL,CPF)
        VALUES (NULL,'$NOME', '$SEXO','$EMAIL', '$CPF')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Cliente cadastrado com sucesso</h1>";
        echo "<a href='cadastro_cliente.html'>Cadastrar novo cliente?</a><br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>