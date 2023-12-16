<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"></st
   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

    <!-- Ion Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
     <!-- JavaScript link -->
    <!-- <script src="/JavaScript/store-js.js" async></script> -->
    <script src="/JavaScript/checkout-js.js" async></script>

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
                    <a href="home.php">Home</a>
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
    <!-- Main section of the webpage -->
    <div role="main" class="container" id="top-page">
        <!-- Individual item 1 -->
        <div id="product">
            <div class="header-image">
                <div class="header-text">
                    <h1>Produto</h1>
                </div>
            </div>
            <div class="product-container">
                <div class="row">
                    <div class="col-md-5">
                        <img class="product-image" src="img/imagem 1 (12).jpeg" alt="top-1">
                    </div>
                    <div class="col-md-7">
                        <p class="path"><a href="/catalogue.html">Catálogo</a> / <a href="/catalogue.html#heading-tops">Figuras de Ação</a></p>
                        <p class="new-arrival text-center">NEW</p>
                        <h2 class="product-heading">Principe Vegeta</h2>
                        <p class="product-code">Código do Produto: SGEB6936</p>
                        <p class="rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </p>
                        <p class="price">R$249.00</p>
                        <p class="availability"><b>Disponibilidade:</b> No Estoque</p>
                        <p class="description"><b>Descrição:</b><br>Com 16 cm de altura, esta figura de ação do Príncipe Vegeta captura a majestade do guerreiro Saiyajin. A pose 
                        dinâmica, expressão feroz e detalhes precisos em seu traje de batalha destacam a determinação única de Vegeta. Mãos intercambiáveis oferecem opções de pose, 
                        enquanto a base personalizada adiciona um toque de realismo a esta representação essencial para colecionadores e fãs de Dragon Ball.</p>
                        <p class="sizes"><b>Tamanho:</b>
                            <select name="sizes" id="sizes">
                                <option> Selecionar tamanho </option>
                                <option value="S">Pequeno</option>
                                <option value="M">Médio</option>
                                <option value="L">Grande</option>
                            </select>
                        </p>
                        <a type="button" class="btn btn-success add-to-cart" href="#" data-name="High Neck Knit Tank" data-price="249.00" data-id="top-1">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
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