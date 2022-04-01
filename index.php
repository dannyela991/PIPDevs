<!-- /* Site: Prêmio Impactos Positivos
Autor: Global Vision
Responsáveis:   Daniela Silva - Front End Project
                Gustavo - Back End Project
                Thiago - Back End Project*/ -->

<?php
// header
include 'app/views/header.php';
?>
<!--  content -->
<main>
    <section class="fullbanner">
        <div class="carrossel-banner">
            <div class="banner-item item-01">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt, harum quia, et, excepturi nihil laboriosam veniam.</p>
                    <div class="read-more">
                        <a class="btn bg-yellow" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="banner-item item-02">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt.</p>
                    <div class="read-more">
                        <a class="btn bg-blue" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="banner-item item-03">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt.</p>
                    <div class="read-more">
                        <a class="btn bg-green" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>       
        <div class="nav-fullbanner">
            <a id="prev-fullbanner" class="icon arrow-left">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a id="next-fullbanner" class="icon arrow-right">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>

    <section class="welcome">
        <div class="container flex-container">
            <div class="text-welcome">
                <div class="title blue">
                    <h1>Prêmio Impactos Positivos</h1>
                </div>
                <div class="content-welcome">
                    <p>Somos uma grande vitrine de iniciativas que impactam positivamente nosso país e o mundo.</p>
                    <div class="read-more">
                        <a class="btn bg-blue" href="#" title="">Sobre o Prêmio</a>
                    </div>
                </div>
            </div>
            <div class="counter-welcome flex-container">
                <div class="col-counter">                    
                    <div class="counter-item">
                        <span class="counter-up">+ 210</span>
                        <p>Projetos Inscritos</p>
                    </div>
                    <div class="counter-item">
                        <span class="counter-up">2.5 milhões</span>
                        <p>de Interações</p>
                    </div>   
                </div> 
                <div class="col-counter">                      
                    <div class="counter-item">
                        <span class="counter-up">R$15 milhões</span>
                        <p>de exposição em midias</p>
                    </div>
                    <div class="counter-item">
                        <span class="counter-up">59</span>
                        <p>Países acessam a plataforma</p>
                    </div>     
                </div>     
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container flex-container">
            <!-- COL NEWS ACCENT -->
            <div class="col-archives">
                <div class="card-news accent">
                    <div class="card-img news-accent">
                        <div class="category">
                            <a href="" title=""><span>Notícias</span></a>
                        </div>
                    </div>
                    <div class="title">
                        <h2><a href="post-single.php" title="">Semear educação financeira e colher realizações</a></h2>
                    </div>
                </div>
            </div>

            <!-- COL NEWS -->
            <div class="col-archives">
                <div class="card-news">
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Video</span></a>
                        </div>
                        <div class="title">
                            <a href="media-single.php" title=""><h2>Noruega e o luxo inusitado IV com Liliana Calisto e Maria Alarcon de V.O.S.</h2></a>
                        </div>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Categoria</span></a>
                        </div>
                        <div class="title">
                            <a href="" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Categoria</span></a>
                        </div>
                        <div class="title">
                            <a href="" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Categoria</span></a>
                        </div>
                        <div class="title">
                            <a href="" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COL NEWS ADS -->
            <div class="col-archives ads">
                <div class="card-news">                    
                    <div class="img-ads">
                        <img src="app/assets/images/banner-latest01.png" alt="" />
                    </div>
                    <div class="img-ads">
                        <img src="app/assets/images/banner-latest02.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="showcases">
        <div class="container">
            <div class="title">
                <h2>Vitrine Prêmio Impactos Positivos 2022</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
            </div>

            <article class="showcase-flex">
                <div class="col-showcase">
                    <div class="line bussines">                    
                        <div class="title">
                            <h3><a href="#">Negócio de Impacto</a></h3>                        
                        </div>
                        <div class="box-carrossel-bussiness">
                            <div class="carrossel-bussiness">
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/denario.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                            <p class="eixo">Cidades</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">TRÊS COROAS | RS</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade.</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/denario.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="read-more">
                                <a href="#" class="bg-blue btn">Ver todos</a>
                            </div>    
                        </div>
                    </div>

                    <div class="separate"></div>

                    <div class="line ecosystem">                    
                        <div class="title">
                            <h3><a href="#">Ecossistema de Impacto</a></h3>                        
                        </div>
                        <div class="box-carrossel-ecosystem">
                            <div class="carrossel-ecosystem">
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                            <p class="eixo">Cidades</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">TRÊS COROAS | RS</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade.</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="read-more">
                                <a href="#" class="bg-yellow btn">Ver todos</a>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="col-sponsors">
                    <div class="title">
                        <h3>Patrocinadores</h3>
                    </div>    
                    <div class="logo-sponsors">
                        <div class="img-sponsors">
                            <img src="app/assets/images/logo-further/assis-e-mendes.png" alt=""/>
                        </div>
                        <div class="img-sponsors">
                            <img src="app/assets/images/logo-further/cacadores-de-bons-exemplos.png" alt=""/>
                        </div>
                        <div class="img-sponsors">
                            <img src="app/assets/images/logo-further/integracao-trade.png" alt=""/>
                        </div>
                        <div class="img-sponsors">
                            <img src="app/assets/images/logo-further/dotsy.png" alt=""/>
                        </div>
                        <div class="img-sponsors">
                            <img src="app/assets/images/logo-further/mulheres-do-turismo" alt=""/>
                        </div>
                    </div>            
                </div> 
            </article>
        </div>
    </section>

    <section class="honor">
        <div class="container">
            <div class="title">
                <h3>Homenagens</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="flex-container">
                <div class="col-impacts">                            
                    <img src="app/assets/images/impact-citizen.svg" alt=""/>
                    <p><a href="#" title="">Cidadão<br>de impacto</a></p>                            
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-impacts">
                    <img src="app/assets/images/impact-institutions.svg" alt=""/>
                    <p><a href="#" title="">Instituição<br>de impacto</a></p>
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>                            
                </div>
                <div class="col-impacts">                            
                    <img src="app/assets/images/impact-communicator.svg" alt=""/>
                    <p><a href="#" title="">Comunicador<br>de impacto</a></p>
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section class="certification">
        <div class="container flex-container">
            <div class="col-certification">
                <div class="title">
                    <h3>Certificação Pacto Global</h3>
                </div>
                <div class="img-certification">
                    <img src="app/assets/images/ods3.png" alt=""/>
                    <h4>Certificado pela excelência na implemantação das ODSs</h4>
                </div>
            </div>
            <div class="col-trophy">
                <div class="title">
                    <h3>Troféu PIP 2022</h3>
                </div>
                <div class="img-certification">
                    <img src="app/assets/images/trofeu.png" alt=""/>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="trends"> 
        <article class="trend-news">
            <div class="container flex-container">
                <div class="col-title">
                    <div class="title">
                        <h2>Trends News</h2>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>                
                        <div class="read-more">
                            <a class="btn bg-black" href="#" title="">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-articles">
                    <div class="flex-container">
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. 
                                </p>
                                <ul class="list-tags">
                                    <li><a href="#">Impacto</a></li>
                                    <li><a href="#">Economia</a></li>
                                    <li><a href="#">Ecosistema</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum
                                </p>
                                <ul class="list-tags">
                                    <li><a href="#">Impacto</a></li>
                                    <li><a href="#">Economia</a></li>
                                    <li><a href="#">Ecosistema</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum
                                </p>
                                <ul class="list-tags">
                                    <li><a href="#">Impacto</a></li>
                                    <li><a href="#">Economia</a></li>
                                    <li><a href="#">Ecosistema</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>    

        <article class="midias">
            <div class="container">                
                <div class="content-midia">
                    <div class="title">
                        <h2>Lives e Vídeos</h2>
                    </div>
                    <div class="content-carrossel-midia">
                        <div class="carrossel-midia">                        
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube.png" onclick="openModal();currentSlide(1)" class="hover-shadow" />
                                </div>                    
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-vimeo.png" onclick="openModal();currentSlide(2)" class="hover-shadow" />
                                </div>
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(3)" class="hover-shadow" />
                                </div>
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(3)" class="hover-shadow" />
                                </div>
                            </div>                                   
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-vimeo.png" onclick="openModal();currentSlide(4)" class="hover-shadow" />
                                </div>
                            </div>                        
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(5)" class="hover-shadow" />
                                </div>
                            </div>    
                        </div>
                        <div class="nav-midia">
                            <a id="prev-midia" class="icon arrow-left">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a id="next-midia" class="icon arrow-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://player.vimeo.com/video/589115579?h=b2e18a66b2&color=ef0004"></iframe>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/vNumRTHEIqE"></iframe>
                        </div>
                    </div>      
                    <div class="mySlides">
                        <div class="container-iframe">
                        <iframe class="responsive-iframe" src="https://player.vimeo.com/video/589115579?h=b2e18a66b2&color=ef0004"></iframe>
                        </div>
                    </div>      
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                    </div>                          
                </div>
            </div>        
        </article>
    
        <article class="podcast">
            <div class="container flex-container">
                <div class="col-title">
                    <div class="title">
                        <h2>News Podcast</h2>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                    </div>
                    <div class="read-more">
                        <a class="btn bg-green" href="#" title="">Ver todos</a>
                    </div>
                </div>
                <div class="col-articles">
                    <div class="carrossel-podcast">
                        <div class="item podcast">
                            <div class="title">
                                <a href="" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="podcast-audio">
                                <audio controls>
                                    <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="podcast-audio">
                                <audio controls>
                                    <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="podcast-audio">
                                <audio controls>
                                    <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="podcast-audio">
                                <audio controls>
                                    <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="podcast-audio">
                                <audio controls>
                                    <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            </div>
                        </div>
                    </div>
                        
                    <div class="nav-podcast">
                        <a id="prev-podcast" class="icon arrow-left">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a id="next-podcast" class="icon arrow-right">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </article>        
    </section>

    <section class="further">
        <div class="container">
            <div class="col-further-content">
                <div class="title">
                    <h2>Apoiadores</h2>
                </div>
            </div>
            <div class="link-logos">
                <div class="carrossel-further">
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/alma-pelo-mundo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/assis-e-mendes.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/banco-perola.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/cacadores-de-bons-exemplos.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/capitalismo-consciente.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/denario.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/dotsy.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/gva.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/integracao-trade.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/lidiane.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/mama-filo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/marta-poggi.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/mulheres-do-turismo.png" alt=""/></a>
                        </div>
                    </div>
                </div>                   
                <div class="nav-further">
                    <a id="prev-link-logos" class="icon arrow-left">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a id="next-further" class="icon arrow-right">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// footer
include 'app/views/footer.php';
?>