<?php

include "../connection/conn.php";

$id= $_POST['id'];
$nome = $_POST['name'];
$descricao = $_POST['description'];
$lote = $_POST['lote'];

$query = $conn->prepare("UPDATE products SET name= ?, description= ?, lote= ? WHERE id=? ");
$query->execute([$nome, $descricao, $lote,$id]);

header('location:listar.php');