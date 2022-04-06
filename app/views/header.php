<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Impactos Positivos</title>
    <link rel="icon" type="image/x-icon" href="app/favicon.ico">

    <script src="https://kit.fontawesome.com/4c0e9dac04.js" crossorigin="anonymous"></script>
    
    <script src="app/assets/jquery.min.js"></script>
    <script src="app/assets/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="app/assets/style.css">
    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="app/assets/slick/slick.css"/>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

</head>
<body>
    <header id="top-page">

        <div class="container">
            <div class="header-nav">
                <div class="logotipo">
                    <a href="index.php" title="HomePage">
                        <img src="app/assets/images/logotipo.svg" alt="Logotipo"/>
                    </a>
                </div>
                <div class="menu">
                    <div class="topnav" id="myTopnav">
                        <div class="nav">
                            <div class="dropdown">
                                <button class="dropbtn">Menu 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">Sobre Nós</a>
                                    <a href="#">Edições Anteriores</a>
                                    <a href="#">Contato</a>
                                </div>
                            </div> 
                            <a href="#home">Parceiros</a>
                            <a href="#news">Apoiadores</a>
                            <div class="dropdown">
                                <button class="dropbtn">Prêmio 2022 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">Cronograma</a>
                                    <a href="#">Como participar</a>
                                    <a href="#">Categorias</a>
                                    <a href="#">Política</a>
                                    <a href="#">Premiação</a>
                                </div>
                            </div> 
                        </div>                    
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                      </div>
                </div>

                <!-- SEARCH -->
                <div class="search-mobile">
                    <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
                          <form action="">
                            <input type="text" placeholder="Pesquisar.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </div>
                      <button class="openBtn" onclick="openSearch()"><i class="fas fa-search"></i></button>
                </div>

                <!-- language -->
                <div class="link-language">
                    <ul>
                        <li><a href="#english" title="Language English">EN</a></li>
                        <li><a href="#spanish" title="Language Spanish">ES</a></li>
                        <li><a href="#portuguese" title="Language Portuguese">PT</a></li>
                    </ul>
                </div>

                <!-- subscription links -->
                <div class="subscription-links">
                    <div class="button-subscription">
                        <a href="form-projects.php" class="btn bg-yellow">Inscreva seu Projeto</a>
                    </div>
                    <div class="button-subscription">
                        <a href="#" class="btn bg-green">Cadastre-se para Votar</a>
                    </div>
                </div>
            </div>     
        </div>                   

    </header>