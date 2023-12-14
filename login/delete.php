<?php
session_start();

include "../connection/conn.php";

$user = $_SESSION['user'];

$query = $conn->prepare("DELETE FROM users WHERE id=? ");
$query->execute([$user['id']]);

header('location:exit.php');// redirecionar p o arquivo definido ../ - voltar ao um diretório

