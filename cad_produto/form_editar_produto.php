<?php
include "../connection/conn.php";

$id = $_GET['id'];

$query = $conn->prepare("SELECT * FROM products WHERE id=? ");
$query->execute([$id]);
$product = $query->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update_produto.php" method="post">
        <label for="">nome: </label>
        <input type="text" name="name" value="<?php echo $product['name']?>">
        <label for="">descrição: </label>
        <input type="text" name="description" value="<?php echo $product['description']?>">
        <label for="">lote: </label>
        <input type="number" name="lote" value="<?php echo $product['lote']?>">
        <input type="hidden" name="id" value="<?php echo $product['id']?>">
        <input type="submit">
    
    </form>
</body>

</html>