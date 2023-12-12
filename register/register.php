<?php
    include "../connection/conn.php";

    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    //$sql= "insert into users (name, email, password) values ('$nome', '$email', '$senha')";

    $query = $conn->prepare("INSERT INTO users (name , email, password) VALUES (?, ?, ?)");
    $query->execute([$nome, $email, $senha]);

    header('location: ../login/form_login.php');// redirecionar p o arquivo definido ../ - voltar ao um diretório


    
?>