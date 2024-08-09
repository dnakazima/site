<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM CLIENTE WHERE NOME LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cliente=mysqli_query($conexao, $resultado);

    while($rows_cliente=mysqli_fetch_array($resultado_cliente)){
        echo "IDCLIENTE: ".$rows_cliente['IDCLIENTE']."<br>";
        echo "NOME: ".$rows_cliente['NOME']."<br>";
        echo "SEXO: ".$rows_cliente['SEXO']."<br>";
        echo "EMAIL: ".$rows_cliente['EMAIL']."<br>";
        echo "CPF: ".$rows_cliente['CPF']."<br>";
        echo "<br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
?>