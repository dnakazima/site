<?php
    include("conexao.php");

    
    $NOME=$_POST['NOME'];
    $USERNAME=$_POST['USERNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    $PASSWORD1=$_POST['PASSWORD1'];
   
    if($PASSWORD == $PASSWORD1){
   

    $sql="INSERT INTO users (USERID,NOME,USERNAME,PASSWORD)
        VALUES (NULL,'$NOME', '$USERNAME', SHA1('$PASSWORD'))";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Usuário cadastrado com sucesso</h1>";
        echo "<a href='../userLogin.html'>Cadastrar novo usuário?</a><br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    }
    else{
        echo "Senhas não conferem";
        echo "<a href='userLogin.html'>Cadastrar novo usuário?</a><br>";

    }


?>