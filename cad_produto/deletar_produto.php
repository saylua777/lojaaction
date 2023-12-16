<?php
include "../connection/conn.php";

$id = $_GET['id'];

$query = $conn->prepare("DELETE FROM products WHERE id=? ");
$query->execute([$id]);

header('location:listar.php');
