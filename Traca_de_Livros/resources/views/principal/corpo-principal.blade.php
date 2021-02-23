<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./IMG/favicon_traca_de_livros.svg" rel="shortcut icon" type="image/x-icon" />

    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--CSS proprio-->
    <link rel="stylesheet" href="./css/style.css">

    <title>Traça de Livros</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="logo" src="./IMG/logo.svg" alt="logo">
            </a>
            <!--Barra pesquisa-->
            <div id="barra-pesquisa">
                <input type="text" placeholder="Pesquisar" aria-describedby="pesquisar">
                <button type="button" id="pesquisar"><i class="bi bi-search"></i></button>
            </div>
            <!---->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Promoções</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="lista-livros" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false" aria-controls="lista1">
                            Livros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="lista-livros" id="lista1">
                            <div class="seta"></div>
                            @yield('menu-livros')
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                           aria-expanded="false" aria-controls="lista2">
                            Papelaria
                        </a>
                        <ul class="dropdown-menu" aria-expanded="lista-papelaria" id="lista2">
                            <div class="seta"></div>
                            @yield('menu-papelaria')
                        </ul>
                    </li>
                </ul>
                <!--login/registro-->
                <ul id="registro-carrinho">
                    <li><a href="./pagina_usuario.html"><i class="bi bi-person"></i></a></li>
                    <li><a href="./carrinho.html"><i class="bi bi-cart2"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('bloco-superior')
    <div class="container" id="bloco-principal">
            <!--bloco principal-->
            @yield('bloco-principal')
    </div>

</main>
<footer>
    <!--rodapé-->
    <div class="container-fluid">
        <div class="row">
            <!--Parceiros-->
            <ul id="lista-parceiros">
                <li><img class="parceiros" src="./IMG/parceiro01.png" alt="parceiro01"></li>
                <li><img class="parceiros" src="./IMG/parceiro02.png" alt="parceiro01"></li>
                <li><img class="parceiros" src="./IMG/parceiro03.png" alt="parceiro01"></li>
                <li><img class="parceiros" src="./IMG/parceiro04.png" alt="parceiro01"></li>
            </ul>
        </div>
        <div class="row" id="informacoes">
            <!--Informações-->
            <div class="col-md-4 col-sm-12">
                <ul class="dados-site">
                    <li>
                        <i class="bi bi-book"></i>
                        <h3>1235 TÍTULOS</h3>
                        <p>Títulos de todos os géneros</p>
                    </li>
                    <li>
                        <i class="bi bi-file-earmark-person"></i>
                        <h3>1142 AUTORES</h3>
                        <p>Autores conhecidos e oportunidade para novos autores</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <ul class="lista-btn-informacoes">
                        <a href="#">
                            <li>
                                <i class="bi bi-chat-left-dots"></i>
                                <h4>Central de Atendimento</h4>
                                <p>Utilize nosso FAQ, chat online ou e-mail para tirar suas duvidas.</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Nossas Lojas</h4>
                                <p>Encontre a loja mais perto de você.</p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="row"></div>
                <ul class="lista-redes-sociais">
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitch"></i></a></li>
                </ul>

            </div>
        </div>
        <div class="row" id="aviso">
            <!--aviso-->
            <p>Este site é apenas um modelo e não faz referencia a nenhuma empresa ou distribuidora.<br>Os valores
                aqui apresentados são apenas fictícios.</p>
        </div>
    </div>
</footer>
<!--Script Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>

</body>

</html>
