<?php
session_start();

include "../connection/conn.php";

$user = $_SESSION['user'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $conn->prepare("UPDATE users SET name= ?, email= ?, password= ? WHERE id=? ");
$query->execute([$nome, $email, $senha, $user['id']]);

$query = $conn->prepare("SELECT * FROM users WHERE id=? ");
$query->execute([$user['id']]);

$userData = $query->fetch(PDO::FETCH_ASSOC);// armazena os valores da consulta acima na variável userData


if($userData ){
    $_SESSION['user']= $userData; //array
    header('location: ../index.php');
}
