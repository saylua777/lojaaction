<?php
session_start();
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Editar dados</h1>
    <form action="update.php" method="POST">

        <label for="">nome: </label>
        <input type="text" name="nome" value="<?php echo $user['name']?>">
        <label for="">Email: </label>
        <input type="email" name="email" value="<?php echo $user['email']?>">
        <label for="">senha: </label>
        <input type="password" name="senha" value="<?php echo $user['password']?>">
        <input type="submit">
    </form>
</body>

</html>