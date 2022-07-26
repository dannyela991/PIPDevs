<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Impactos Positivos</title>
    <link rel="icon" type="image/x-icon" href="app/favicon.ico">
    <meta property="og:title" content="Impactos Positivos" />
    <meta property="og:description" content="Somos uma grande vitrine de iniciativas que impactam positivamente nosso país e o mundo.">
    <meta property="og:url" content="https://impactospositivos.com/" />
    <meta property="og:image" content="https://impactospositivos.com/assets/images/logo.jpeg" />
    <meta property="og:type" content="website" />

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
                                <button class="dropbtn">Sobre nós
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="about-us.php">Quem Somos</a>
                                    <a href="projects.php">Manifesto</a>
                                    <!-- <a href="#">Edições Anteriores</a> -->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">Conteúdos
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="posts.php">Publicações</a>
                                    <a href="trend-news.php">Notícias</a>
                                    <a href="medias.php">Lives e Vídeos</a>
                                    <a href="podcast.php">Podcast</a>
                                    <a href="#">Na Mídia</a>
                                </div>
                            </div> 
                            <div class="dropdown">
                                <button class="dropbtn">Prêmio 2022 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="projects.php">Vitrine 2022</a>
                                    <a href="homenagens.php">Homenagens</a>
                                    <a href="cronograma.php">Cronograma</a>
                                    <a href="#">Como participar</a>
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
                        <a href="select-project.php" class="btn bg-yellow">Inscreva seu Projeto</a>
                    </div>
                    <div class="button-subscription">
                        <a href="form-user.php" class="btn bg-green">Cadastre-se para Votar</a>
                    </div>
                </div>
            </div>     
        </div>                   

    </header>