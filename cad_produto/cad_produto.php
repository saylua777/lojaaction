<?php
    include "../connection/conn.php";

    $nome= $_POST['nome'];
    $description= $_POST['description'];
    $lote= $_POST['lote'];

    //$sql= "insert into users (name, email, password) values ('$nome', '$email', '$senha')";

    $query = $conn->prepare("INSERT INTO products (name , description, lote) VALUES (?, ?, ?)");
    $query->execute([$nome, $description, $lote]);

    header('location: ../index.php');// redirecionar p o arquivo definido ../ - voltar ao um diretório


?>