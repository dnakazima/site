<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM TELEFONE WHERE ID_CLIENTE = '$pesquisar' LIMIT 5";
    $resultado_tel=mysqli_query($conexao, $resultado);

    while($rows_tel=mysqli_fetch_array($resultado_tel)){
        echo "NUMERO: ".$rows_tel['NUMERO']."<br>";
        echo "TIPO: ".$rows_tel['TIPO']."<br>";
        echo "<br>";
        echo "<a href='../index.html'>Página inicial</a>";
        
    }
?>