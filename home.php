<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"></st
   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ion Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Loja action figure</title>
</head>

<body>
     <!-- Banner -->
     <div class="banner">
        <marquee>USE O CÓDIGO <span>MYMACTION10</span> PARA 10% OFF NO SEU CARRINHO</marquee>
    </div>

    <header class="header">
        <div class="container">
            <img src="img/logomaior.png" alt="g-ray">
            <div class="menu">
                <nav>
                    <a href="">Home</a>
                    <a href="">Sobre Nós</a>
                    <a href="">Catálogo</a>
                    <a href="">Ajuda</a>
                    <a href="">Carrinho</a>
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
    <!-- About us section -->
    <section id="about-us">
            <h2>Sobre Nós</h2>
            <p>
            Quem não ama alguma coisa, não é mesmo? A Atacado Collections nasceu para que você possa demonstrar todo seu amor por algum personagem/personalidade favorito.<br>
            Somos a distribuidora da Funko em Ciudad del Este e nos tornamos a maior loja de colecionáveis da América Latina.<br>
            Fundada em 7 de Julho de 2018, nossa estrutura oferece uma infinidade de produtos, com mais de 5 mil colecionáveis entre as marcas mais conhecidas do mundo: Hasbro, Bandai, Funko, Mattel e muitos outros.
            Nossa loja é toda Instagramável, oferecendo várias possibilidades para que você tire muitas fotos e faça stories com seus personagens de séries e filmes favoritos. Nossas estátuas gigantes se tornaram ponto turístico em Ciudad del Este, fazendo a alegria de todos que vêm nos visitar.<br>
            Ah! E estamos localizados em um local super estratégico, logo em frente ao Shopping Paris. Basta atravessar a rua para viver uma grande experiência.<br>
            As suas compras no Paraguai acabaram de se tornar ainda mais incríveis. Com preços baixos, a Loja Action será a sua referência nerd em Recife.<br>
            Venha conhecer a gente e ter uma experiência geek completa. 
                <br>
                <a href="/about-us.html">
                    Mais
                </a>
            </p>
    </section>
    <!-- The catalogue containing top 4 picks -->
        <div class="heading-top-4-picks" id="top-4-picks">
            <h2>Destaques</h2>
            <div class="row card-deck">
                <!-- This is the 1st item -->
                <div class="card">
                    <!-- According to Bootstrap, a thumbnail is a component that gives an image a 1px border -->
                    <img class="card-img-top img-thumbnail img-fluid" src="img/imagem 1 (12).jpeg" alt="Item 1">
                    <!-- A responsive image is an image that can automatically adjust to fit the size of the screen -->
                    <div class="card-body">
                        <h4 class="card-title product-heading">Principe Vegeta</h4>
                        <br>
                        <a href="/Items/item1.html" class="btn btn-success">Ver mais</a>
                        <!-- Implemented buttons customised -->
                    </div>
                </div>
                <!-- This is the 2nd item -->
                <div class="card">
                    <img class="card-img-top img-thumbnail img-fluid" src="img/imagem 1 (19).jpeg" alt="Item 9">
                    <div class="card-body">
                        <h4 class="card-title product-heading">Freeza</h4>
                        <br>
                        <a href="/Items/item9.html" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
                <!-- This is the 3rd item -->
                <div class="card">
                    <img class="card-img-top img-thumbnail img-fluid" src="img/imagem 1 (20).jpeg" alt="Item 4">
                    <div class="card-body">
                        <h4 class="card-title product-heading">Super Soft Boyfriend Jeans</h4>
                        <br>
                        <a href="/Items/item4.html" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
                <!-- This is the 4th item -->
                <div class="card">
                    <img class="card-img-top img-thumbnail img-fluid" src="img/imagem 1 (17).jpeg" alt="Item 11">
                    <div class="card-body">
                        <h4 class="card-title product-heading">Gacha Naruto</h4>
                        <br>
                        <a href="/Items/item11.html" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- This is where you can find some feedback from previous customers -->
        <div id="customer-feedback">
            <h2>Top Feedback</h2>
            <div class="row card-deck">
                <!-- 1st -->
                <div class="card feedback">
                    <div class="stars">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <h5 class="card-title">Adam K.</h5>
                    <div class="card-text">
                    Entrega rápida, bem embalado, de boa qualidade, produto adorável! Obrigado.
                    </div>
                </div>
                <!-- 2nd -->
                <div class="card feedback">
                    <div class="stars">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <h5 class="card-title">Crystal W.</h5>
                    <div class="card-text">
                    Ótima compra! Exatamente como descrito! Entrega rápida!
                    </div>
                </div>
                <!-- 3rd -->
                <div class="card feedback">
                    <div class="stars">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <h5 class="card-title">Naomi S.</h5>
                    <div class="card-text">
                    Satisfeito com o produto, ótimo atendimento. Muito Obrigado.
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <footer>
            <!-- Contact information -->
            <div>
                    <h5>Contatos:<br></h5>
                <ul>
                    <li>
                        Email <a href="mailto:lojaaction.oficial@gmail.com">lojaaction.oficial@gmail.com</a>
                    </li>
                    <li>Telefone <b>079 923 9321</b></li>
                </ul>
            </div>
            <!-- The footer has the author of the webpage -->
            <div class="footer">
                <p>
                    -Website criado por Mateus Barbosa, Marcelo Augusto e Yasmin Luana.-
                </p>
            </div>
        </footer>
    </div>

    


    


</body>

</html>

<!-- th>nome: </th>
        <th>descrição: </th>
        <th>lote: </th>
        <tr>
            <td>dragon ball</td>
        </tr> -->