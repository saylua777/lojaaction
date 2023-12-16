<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <th>name</th>
        <th>descrição</th>
        <th>lote</th>
        <th></th>
        <th></th>
        <?php
        include "../connection/conn.php";

        $products = $conn->prepare("SELECT * FROM products ");
        $products->execute();

        foreach($products as $product){
                
        ?>
        <tr>
            <td><?php echo $product['name']?></td>
            <td><?php echo $product['description']?></td>
            <td><?php echo $product['lote']?></td>
            <td><a href="form_editar_produto.php?id=<?php echo $product['id']?>">editar</a></td>
            <td><a href="deletar_produto.php?id=<?php echo $product['id']?>">deletar</a></td>
        </tr>
       <?php
       }
       ?>
    </table>
</body>

</html>