<?php

session_start();

include "../connection/conn.php";

$email= $_POST['email'];
$password= $_POST['password'];

$query = $conn->prepare("SELECT * FROM users WHERE email=? AND password=? ");
$query->execute([$email, $password]);

$userData = $query->fetch(PDO::FETCH_ASSOC);// armazena os valores da consulta acima na variável userData

//var_dump($userData); imprime tudo

if($userData ){
    $_SESSION['user']= $userData; //array
    header('location: ../index.php');
}
else{
    echo " <script>alert('usuário inexistente') </script>";
    echo " <script>window.location.href= 'form_login.php'</script>";
    
}
