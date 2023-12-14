<?php
session_start();
if (!$_SESSION['user']) {
    echo " <script>alert('faz o login') </script>";
    echo " <script>window.location.href= 'login/form_login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Loja action figure</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <img src="img/logomaior.png" alt="g-ray">
            <div class="menu">
                <nav>
                    <a href="">Home</a>
                    <a href="">Categorias</a>
                    <a href="">Sobre nós</a>
                    <a href="">Ajuda</a>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-user"></i></button>
                        <div class="dropdown-content">
                            <a href="login/form_update.php">Editar dados</a>
                            <a href="login/delete.php">Apagar conta</a>
                            <a href="login/exit.php">Sair</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <img src="img/Desktop - 2.png" width="100%" height="100%">


</body>

</html>

<!-- th>nome: </th>
        <th>descrição: </th>
        <th>lote: </th>
        <tr>
            <td>dragon ball</td>
        </tr> -->