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
    <title>Tela inicial</title>
</head>

<body id="body_login">

    <main class="container_login">
        <form id="login_form">
            <div id="form-header">
                <h2>Venha fazer parte dessa família!</h2>
            </div>
            <div id="social_media">
                <a href="#"><img src="../img/instagram.png" alt="instagram"></a>
                <a href="#"><img src="../img/google.png" alt="google"></a>
                <a href="#"><img src="../img/whatsapp.png" alt="whatsapp"></a>
            </div>
            <div id="inputs">
                <div class="input-box">
                    <label for="email">Endereço de email
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="email" id="email">
                        </div>
                    </label>
                    <div class="input-box">
                        <label for="password">Password
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="password" id="password">
                            </div>
                        </label>
                        <div id="forgot-password">
                            <a href="#"> Forgot your password? </a>
                        </div>

                    </div>
                </div>
            </div>

            <button type="submit" class="login_button">Enviar</button>

            <div class="divider">
                <a class="item" href="register/form_register.php">Novo, por aqui? Registre-se.</a>
            </div>

        </form>

    </main>

</body>

</html>