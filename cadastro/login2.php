<?php
include("conexao.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($conexao, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conexao, SHA1($_POST['password']));


    $sql = "SELECT id FROM users WHERE myusername = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($conexao, $sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
        //header("location: cadastro.html");

    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<html>

<head>
    <title>Login Page</title>

    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        label {
            font-weight: bold;
            width: 100px;
            font-size: 14px;
        }

        .box {
            border: #666666 solid 1px;
        }
    </style>

</head>

<body bgcolor="#FFFFFF">

    <div align="center">
        <div style="width:300px; border: solid 1px #333333; " align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style="margin:30px">


              

                    <script>
                        function show() {
                            var senha = document.getElementById("password");
                            if (senha.type === "password") {
                                senha.type = "text";
                            } else {
                                senha.type = "password";
                            }
                        }
                    </script>


                    <form action="" method="post">
                        <label>UserName :</label>
                        <input type="text" name="username"  placeholder="login"><br /><br />
                        <label>Senha :</label><br />
                        <input type="password" name="password" id="password"  placeholder="Digite a Senha" required>
                        <input type="checkbox" onclick="show()">
                        <br><br>
                        <input type="submit" value="Enviar">
                    </form>

                





                <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

                <a href='userLogin.html'>Cadastrar novo usuário?</a><br>

            </div>



        </div>

    </div>

</body>

</html>