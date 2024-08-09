<?php
   include('conexao.php');
   session_start();
   
   if(!isset($_SESSION['login_user'])){
   echo('Faça login ou se cadastre - Somente pessoas cadastradas'.'<br>'); 
   echo ("<a href='../index.html'>Página inicial</a>"."<br>"); 
   die();
   }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conexao,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   
?>
 
   
  
  
   
   
  
   
   
