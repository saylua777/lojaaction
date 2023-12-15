<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
        rel="stylesheet" />
    <title>Cria Conta</title>
</head>

<body id="body_login">

    <main class="container_login">
        <form id="login_form" action="login.php" method="post">
            <div id="form-header">
                <h2>Criar Conta</h2>
            </div>
            <div id="social_media">
                <a href="#"><img src="../img/instagram.png" alt="instagram"></a>
                <a href="#"><img src="../img/google.png" alt="google"></a>
                <a href="#"><img src="../img/whatsapp.png" alt="whatsapp"></a>
            </div>
            <div id="inputs">
                <div class="input-box">
                    <label for="name">Nome
                        <div class="input-field">
                            <input type="text" name="name" id="name">
                        </div>
                    </label>
                    <label for="email">Email
                        <div class="input-field">
                            <input type="email" name="email" id="email">
                        </div>
                    </label>
                    <div class="input-box">
                        <label for="password">Senha
                            <div class="input-field">
                                <input type="password" name="password" id="password">
                            </div>
                        </label>

                    </div>
                </div>
            </div>

            <button type="submit" class="login_button">Criar</button>

        </form>

    </main>

</body>

</html>